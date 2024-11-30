#### Files Provided:
`server_logs.txt`

**Sample Log File (`server_logs.txt`):**

```
192.168.1.10 - - [30/Nov/2024:14:00:05 +0000] "GET /index.html HTTP/1.1" 200 512
203.0.113.5 - - [30/Nov/2024:14:02:43 +0000] "GET /login.php HTTP/1.1" 200 231
198.51.100.42 - - [30/Nov/2024:14:05:17 +0000] "POST /login.php HTTP/1.1" 302 0
203.0.113.5 - - [30/Nov/2024:14:07:01 +0000] "GET /admin.php HTTP/1.1" 403 124
192.168.1.10 - - [30/Nov/2024:14:10:19 +0000] "GET /favicon.ico HTTP/1.1" 200 512
198.51.100.42 - - [30/Nov/2024:14:15:33 +0000] "POST /upload.php HTTP/1.1" 200 1024
198.51.100.42 - - [30/Nov/2024:14:15:45 +0000] "GET /shell.php HTTP/1.1" 200 2048
```

---

#### Task:  
Analyze the log file and answer these questions:  
1. **What is the suspicious IP address?**  
2. **At what time did the intrusion happen?** 
3. **What is the malicious file or command executed?**  
