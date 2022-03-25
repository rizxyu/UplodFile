__path = process.cwd()

var express = require('express');
var router = express.Router();

router.get('/', (req, res) => {
    res.sendFile(__path + '/index.html')
})

router.get('/config', (req, res) => {
    config = {
        status: true,
        result: {
            prefix : '/',
            nama: 'Rizxyu',
            instagram: 'MoonLyLy',
            youtube : 'Moonly'
        }
    }
    res.json(config)
})

module.exports = router
