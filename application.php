<html>
<head>
    <title>Bootstrap Progress Bar</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="css.css" type="text/css">
  <style>
  h1 {
  border-bottom:2px solid #000;
  display:inline-block!important;
}

.text-center {
  text-align: center;
}
li {
  width:19%;
}
button {
  /* display: inline; */
  width: 100%;
}

.orange-active:hover {
  background-color: rgba(255,183,0,1)!important;
}

.orange-active:active {
  background-color: rgba(255,183,0,1)!important;
} 

.tab-pane {
  padding: 30px 0;
  /* height: 250px; */
}

.tab-pane p {
  width: 50%;
  padding: 0px 50px;
  float: left;
  /* vertical-align: middle; */
  /* display:table-cell; */
  /* position: relative; */
  /* top:50%; */
  /* transform:translateY(-50%); */
}

.tab-pane img {
  /* display: inline-block; */
  /* float: right; */
  width: 40%;
  
}



  </style>  

</head>
<body>
    <div class="container">
      <div class="text-center">
        <h1>South Delhi Municipal</h1>
      </div>
      <p class="text-center">Job Application</p>
        <p class="text-center">
          			  <ul class="nav nav-tabs" role="tablist">
				
            <li role="presentation" ><a href="#tab-basic-info" aria-controls="tab-basic-info" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="20" class="btn btn-default orange-active">
              1. <br />Basic info
            </button></a></li>
            <li role="presentation"><a href="#tab-education-info" aria-controls="tab-education-info" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="40" class="btn btn-default orange-active">
              2. <br />Education Info
            </button></a></li>
            <li role="presentation"><a href="#technica" aria-controls="technica" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="60" class="btn btn-default orange-active">
              3. <br />Professional
            </button></a></li>
            <li role="presentation"><a href="#rw4" aria-controls="rw4" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="80" class="btn btn-default orange-active">
              4. <br />Print & Preview
            </button></a></li>
            <li role="presentation"><a href="#podhod5" aria-controls="podhod5" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="100" class="btn btn-default orange-active">
              5. <br />Сдача объекта
             </button></a></li>
          </ul>
      
      <div id="myProgressbar" class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
            <span class="sr-only">0% Завершено</span>
          </div>
        </div>
  
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="tab-basic-info">
              <p>basic information tab</p>
              <img src="img/bravo-professional-keys3.png" width="400" height="200" alt="">
            </div>
            <div role="tabpanel" class="tab-pane" id="tab-education-info">
              <p>Education information tab </p>
              <img src="img/matrix-sx-keys.png" alt="" width="400" height="200">
            </div>
            <div role="tabpanel" class="tab-pane" id="technica">
              <p>Наши специалисты соберут комплект необходимой документации и правильно организуют процесс прохождения экспертизы.</p>
              <img src="img/technica-keys.png" width="400" height="200">
            </div>
            <div role="tabpanel" class="tab-pane" id="rw4">
              <p>Использование качественных материалов и актуальных технологий позволяет нам осуществлять строительство на высоком уровне.</p>
              <img src="img/tipi-kluchei-transponderov-immobilizer.png" alt="" width="400" height="200">
            </div>
            <div role="tabpanel" class="tab-pane" id="podhod5">
              <p>На завершающем этапе строительства мы поможем Вам с получением разрешения на ввод объекта в эксплуатацию.</p>
              <img src="img/matrix-sx-keys.png" alt="" width="400" height="200">
            </div>
          </div>
        </p>
  
        
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="js/progressbar.js"></script>
  <script type="text/javascript">
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


!function ($) {

    "use strict";

    // PROGRESSBAR CLASS DEFINITION
    // ============================

    var Progressbar = function (element) {
        this.$element = $(element);
    }

    Progressbar.prototype.update = function (value) {
        var $div = this.$element.find('div');
        var $span = $div.find('span');
        $div.attr('aria-valuenow', value);
        $div.css('width', value + '%');
        $span.text(value + '% Complete');
    }

    Progressbar.prototype.finish = function () {
        this.update(100);
    }

    Progressbar.prototype.reset = function () {
        this.update(0);
    }

    // PROGRESSBAR PLUGIN DEFINITION
    // =============================

    $.fn.progressbar = function (option) {
        return this.each(function () {
            var $this = $(this),
                data = $this.data('jbl.progressbar');

            if (!data) $this.data('jbl.progressbar', (data = new Progressbar(this)));
            if (typeof option == 'string') data[option]();
            if (typeof option == 'number') data.update(option);
        })
    };

    // PROGRESSBAR DATA-API
    // ====================

    $(document).on('click', '[data-toggle="progressbar"]', function (e) {
        var $this = $(this);
        var $target = $($this.data('target'));
        var value = $this.data('value');

        e.preventDefault();

        $target.progressbar(value);
    });

}(window.jQuery);




</script>
</body>
</html>