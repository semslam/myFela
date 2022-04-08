const express = require("express");
const path = require("path");

const app = express();

app.use(express.static("public"));

const PORT = 3000;

app.listen(PORT, () => {
  console.log("Server started on port " + PORT);
});
