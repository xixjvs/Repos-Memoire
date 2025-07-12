pipeline {
    agent any

    environment {
        DEPLOY_DIR = "${WORKSPACE}/deploy/app_memoire"
        DB_USER = "root"
        DB_PASS = "password"
        DB_NAME = "app_memoire_db"
        INIT_SQL = "${WORKSPACE}/models/init.sql"

         // Configuration Docker
        DOCKER_HUB_CREDENTIALS = 'jnk-creds' // ID Jenkins Credentials
        DOCKERHUB_USER = 'pauljosephd'       // ton nom d’utilisateur Docker Hub
        
        DOCKER_IMAGE = "xixjvs/app_memoire" // ← ton Docker Hub
        DOCKER_TAG = "latest"
    }

    stages {
        stage('Préparation') {
            steps {
                echo "Nettoyage du workspace"
                deleteDir()

                echo "Clonage du projet"
                git url: 'https://github.com/xixjvs/Repos-Memoire.git', branch: 'master'
            }
        }

        stage('Validation PHP') {
            steps {
                echo "Vérification des erreurs PHP"
                sh 'find . -name "*.php" -exec php -l {} \\;'
            }
        }

        stage('Déploiement local (facultatif)') {
            steps {
                echo "Déploiement local dans ${DEPLOY_DIR}"
                sh """
                    rm -rf ${DEPLOY_DIR}
                    mkdir -p ${DEPLOY_DIR}
                    rsync -av --exclude='deploy' ./ ${DEPLOY_DIR}/
                """
            }
        }

        stage('Base de données (facultatif)') {
            steps {
                script {
                    def sqlExists = fileExists(INIT_SQL)
                    if (sqlExists) {
                        echo "Importation de la base de données depuis init.sql"
                        sh "mysql -u${DB_USER} -p${DB_PASS} -e 'CREATE DATABASE IF NOT EXISTS ${DB_NAME};'"
                        sh "mysql -u${DB_USER} -p${DB_PASS} ${DB_NAME} < ${INIT_SQL}"
                    } else {
                        echo "Aucun fichier init.sql trouvé. Étape ignorée."
                    }
                }
            }
        }

        stage('Construction Docker') {
            steps {
                echo "Construction de l'image Docker"
                sh "docker build -t ${DOCKER_IMAGE}:${DOCKER_TAG} ."
            }
        }

        stage('Connexion à Docker Hub') {
            steps {
                withCredentials([usernamePassword(credentialsId: "${DOCKER_HUB_CREDENTIALS}", usernameVariable: 'DOCKER_USER', passwordVariable: 'DOCKER_PASS')]) {
                    sh 'echo "$DOCKER_PASS" | docker login -u "$DOCKER_USER" --password-stdin'
                }
            }
        }

        stage('Push vers Docker Hub') {
            steps {
                echo "Push de l’image ${DOCKER_IMAGE}:${DOCKER_TAG} sur Docker Hub"
                sh "docker push ${DOCKER_IMAGE}:${DOCKER_TAG}"
            }
        }
    }

    post {
        always {
            echo "Nettoyage des identifiants"
            sh "docker logout"
        }
        success {
            echo "✅ Pipeline terminé avec succès et image publiée sur Docker Hub"
        }
        failure {
            echo "❌ Le pipeline a échoué"
        }
    }
}
