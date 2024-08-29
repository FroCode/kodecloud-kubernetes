### to check if log are stored on the sidecar-container volume
```
kubectl  exec -it webserver -c sidecar-container -- cat /var/log/nginx/error.log
```
