pipeline {
    agent any

    environment {
        DEPLOY_DIR = "/var/www/html/app_memoire"
        DB_USER = "root"
        DB_PASS = "password"
        DB_NAME = "app_memoire_db"
        INIT_SQL = "${WORKSPACE}/models/init.sql" // à créer si besoin
    }

    stages {
        stage('Préparation') {
            steps {
                echo "Nettoyage du workspace"
                deleteDir()

                echo "Clonage du projet"
                git url: 'https://github.com/xixjvs/Repos-Memoire.git', branch: 'main'
            }
        }

        stage('Validation PHP') {
            steps {
                echo "Vérification des erreurs PHP"
                sh 'find . -name "*.php" -exec php -l {} \\;'
            }
        }

        stage('Déploiement des fichiers') {
            steps {
                echo "Déploiement dans ${DEPLOY_DIR}"
                sh """
                    sudo rm -rf ${DEPLOY_DIR}
                    sudo mkdir -p ${DEPLOY_DIR}
                    sudo cp -r * ${DEPLOY_DIR}
                """
            }
        }

        stage('Base de données') {
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

        stage('Test de disponibilité') {
            steps {
                echo "Test d’accessibilité de l’application"
                sh 'curl -I http://localhost/app_memoire/index.php || true'
            }
        }
    }

    post {
        success {
            echo "✅ Pipeline terminé avec succès"
        }
        failure {
            echo "❌ Le pipeline a échoué"
        }
    }
}
