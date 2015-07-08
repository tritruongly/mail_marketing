/**
 * Created by truongly on 06/07/2015.
 */
if(!window.email_app||window.email_app instanceof Array)
{
    var setting =
    {
        url: 'http://localhost/mail-api/public/application/index/add',
        queue: []
    };
    window.email_app = function()
    {
        var sendAction = function(callback)
        {
            var data = setting.queue;
            var b = [];
            for(var a = 0; a < data.length; a++)
            {
                b.push(data[a]);
                setting.queue.slice(a, 1);
            }
            callback(b);
        },
        runAction = function(b)
        {
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.open("POST", setting.url, true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xmlhttp.send('data=' + JSON.stringify(b));
        };
        return {
            push: function() {
                if(arguments.length > 0) {
                    for (var a = 0; a < arguments.length; ++a) {
                        setting.queue.push(arguments[a]);
                    }
                    sendAction(runAction);
                }
            }
        };
    }();
    window.email_app.push.apply(window.email_app);
}


