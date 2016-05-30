var chatAjax = false; 
    function updat (url) { 
        chatAjax = false; 
        handler = false; 
        if (window.XMLHttpRequest) { 
            chatAjax = new XMLHttpRequest(); 
            if (chatAjax.overrideMimeType) { 
                chatAjax.overrideMimeType('text/xml'); 
            } 
        } else if (window.ActiveXObject) { 
            try { 
                chatAjax = new ActiveXObject("Msxml2.XMLHTTP"); 
            } catch (e) { 
                try { 
                    chatAjax = new ActiveXObject("Microsoft.XMLHTTP"); 
                } catch (e) { 
                    alert("Couldn´t build an AJAX instance."); 
                    return false; 
                } 
            } 
        } 
        try { 
            chatAjax.onreadystatechange = getPage; 
        } catch (e) { 
            alert("onreadystatechange didn´t go well!"); 
            return false; 
        } 
        try { 
            chatAjax.open('GET', url, true); 
        } catch (e) { 
            alert("Couldn´t open url."); 
            return false; 
        } 
        try { 
            chatAjax.send(null); 
        } catch (e) { 
            alert("Couldn´t send request."); 
            return false; 
        } 
            return true; 
    } 

    function getPage () { 
        if(chatAjax.readyState == 4){ 
	var text = chatAjax.responseText
	var del = text.split(":|:");
	document.getElementById("messbox").innerHTML = del[0];
	document.getElementById("userbox").innerHTML = del[1];
	
        
        } 
    document.getElementById("messbox").scrollTop = 2000;
    } 
var interval = setInterval("updat('mess.php')",15000);	// Uuendus millisekundites.
