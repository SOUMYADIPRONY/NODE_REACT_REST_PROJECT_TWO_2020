- mkdir keycertz
- openssl genrsa -des3 -out mykey.pem 2048
- openssl rsa -in mykey.pem -pubout > mykey.pub

"name" : "System Admin",
"email" : "admin@pr0con.com",
"alias" : "system",
"password" : "",
"role" : "admin",