var Redis = require('ioredis');
var redis = new Redis();
var io = require('socket.io')(8000);

redis.psubscribe('*', function (err, count) {
    
});

redis.on('pmessage', function (pattern, channel, message) {
   console.log(channel, message); 
   io.emit(channel+':'+message.event, message.data.message);
});


