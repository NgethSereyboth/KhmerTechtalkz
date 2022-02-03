import { Application } from "stimulus"
import { definitionsFromContext } from "stimulus/webpack-helpers"
require('./bootstrap');

$(document).ready(function () {

  $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

});

const application = Application.start()
const context = require.context("./controllers/admin", true, /\.js$/)
application.load(definitionsFromContext(context))