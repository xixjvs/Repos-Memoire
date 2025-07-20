FROM alpine:3.18
RUN apk add --no-cache python3 py3-pip iptables
RUN pip install prometheus_client
COPY exporter.py /app/
WORKDIR /app
EXPOSE 9455
CMD ["python3", "exporter.py"]