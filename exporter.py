from prometheus_client import start_http_server, Gauge
import subprocess
import time

packets = Gauge('iptables_packets', 'Packet count', ['chain'])
bytes = Gauge('iptables_bytes', 'Byte count', ['chain'])
rejects = Gauge('iptables_rejects', 'Rejected packets', ['chain'])
proto = Gauge('iptables_proto', 'Traffic by protocol', ['chain','protocol'])

def collect_metrics():
    try:
        output = subprocess.check_output(
            ['iptables', '-L', '-n', '-v', '-x'],
            stderr=subprocess.STDOUT
        ).decode()
        
        for line in output.split('\n')[2:]:
            if line.strip():
                parts = line.split()
                if len(parts) >= 3:
                    chain = parts[1]
                    packets.labels(chain=chain).set(parts[2])
                    bytes.labels(chain=chain).set(parts[3])
    except Exception as e:
        print(f"Error collecting metrics: {e}")

if __name__ == '__main__':
    start_http_server(9455, addr='0.0.0.0')
    while True:
        collect_metrics()
        time.sleep(10)