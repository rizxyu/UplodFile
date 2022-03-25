const express = require("express");
const bodyParser = require("body-parser");
const cors = require("cors");
const ytdl = require("ytdl-core");
const app = express();
const fs = require("fs");
const fetch = require("node-fetch");
const axios = require("axios");
const FormData = require("form-data");
const { fromBuffer } = require("file-type");
const { exec } = require("child_process");

var mainrouter = require('./index')

let PORT = process.env.PORT || 8080 || 5000 || 3000

app.listen(PORT, function() {
  console.log(`Server is working at port ${PORT}`);
})

app.use(express.static("public"));
app.use(express.urlencoded({ extended: true }));
app.use(express.json());
app.use('/', mainrouter)

/*Router*/
__path = process.cwd()

var router = express.Router();

router.get('/', (req, res) => {
    res.sendFile(__path + '/index.php')
})

module.exports = router
module.exports = app
