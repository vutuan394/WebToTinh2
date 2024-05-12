"use strict"
var login = require("facebook-chat-api"); //Require modules
var request = require("request");

// Nhớ thay username và password 
login({email: "USERNAME", password: "PASSWORD"}, function callback (err, api) {
	if (err) 
		return console.log(err); // Neu login khong duoc thi hien thong bao loi len console
	api.setOptions({forceLogin: true, logLevel: 'silent', listenEvents: true}); // Set options cho bot 

	api.listen(function(err, event) { 
  		if (err) return console.log("Unable to handle data. \n"+err);
	});
});