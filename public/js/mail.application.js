/**
 * Created by truongly on 06/07/2015.
 */
if(!window.email_app||window.email_app instanceof Array)
{
    //var oldQueue = window.email_app || [];
    var setting = {
        queue: []
    };
    window.email_app = function()
    {
        var send = function()
        {
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp.onreadystatechange = function()
            {
                if (xmlhttp.readyState == XMLHttpRequest.DONE )
                {
                    if(xmlhttp.status == 200)
                    {
                        //document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
                    }
                    else if(xmlhttp.status == 400) {
                        //alert('There was an error 400')
                    }
                    else {
                        //alert('something else other than 200 was returned')
                    }
                }
            }

            for(var a = 0; a < setting.queue.length; a++)
            {
                var b = setting.queue[a];
                xmlhttp.open("POST", "http://localhost/mail-api/public/application/index/add", true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send('event=' + b.event + "&email=" + b.email);
            }
        };
        return {
            push: function() {
                for (var a = 0; a < arguments.length; ++a) {
                    setting.queue.push(arguments[a]);
                }
                send();
            }
        };
    }();
    window.email_app.push.apply(window.email_app)
}


