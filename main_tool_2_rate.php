<?php require_once "head.php" ?>

<?php $_SESSION['source_number'] = 2 ?>
<?php require_once 'functions.php' ?>

<?php require_once "view/navbar.view.php" ?>
<?php require_once "view/get_main_source.view.php" ?> 

<?php //$main_source1 = new GET(); ?>

<?php 
 if (main_source_2() == 'bazą danych') {
    require "view/get_main_apps.view.php";
    $main = $main_apps;
  } 
    else 
  { 
    require "view/get_main_tools.view.php"; 
    $main = $main_tools;  
  ;}  
?> 

<div class="card border-dark mb-3" style="max-width: 100%;">
  <div class="card-header">
    <h5 class="text-center">Jak oceniasz efektywnoś komunikacji z danymi żrodłami w komunikacji z  <b><?php print(main_source_2()); ?></b> </h5>
  </div>

<div class="card-body text-dark">

  <?php global $main_tool; ?>       
  <div id="App">
    <div class="form-group ">
      <label class="control-label"  >

      </label>
      <label class="control-label bold">
        
      </label>
        <br>
      <div class="row">
        <div class="col-md-3">
          <label class="control-label bold">
            <?php 
                  $opcja_1 = key($main);
                  echo change_name($opcja_1);
                  next($main);
            ?>
          </label>
        </div>  
        <div class="col-md-9">
          <div class="form-group ">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group mr-3">
                <button v-if="opcja_1 == '5'" type="button" v-on:click="opcja_1 = '5'" v-model="opcja_1" value="opcja_1" class="btn btn-lg btn-danger">Źle</button>
                <button v-else type="button" v-on:click="opcja_1 = '5'" v-model="opcja_1" value="opcja_1" class="btn btn-lg btn-outline-danger">Źle</button>
              </div>
              <div class="btn-group mr-3">
                <button v-if="opcja_1 == '4'" type="button" v-on:click="opcja_1 = '4'" v-model="opcja_1" class="btn btn-lg btn-warning">Raczej źle</button>
                <button v-else type="button" v-on:click="opcja_1 = '4'" v-model="opcja_1" class="btn btn-lg btn-outline-warning">Raczej źle</button>
              </div> 
              <div class="btn-group mr-3">  
                <button v-if="opcja_1 == '2'" type="button" v-on:click="opcja_1 = '2'" v-model="opcja_1"  class="btn btn-lg btn-info">Raczej dobrze</button>
                <button v-else type="button" v-on:click="opcja_1 = '2'" v-model="opcja_1"  class="btn btn-lg btn-outline-info">Raczej dobrze</button>
              </div> 
              <div class="btn-group mr-3"> 
                <button v-if="opcja_1 == '1'" type="button" v-on:click="opcja_1 = '1'" v-model="opcja_1"  class="btn btn-lg btn-success">Dobrze</button>
                <button v-else type="button" v-on:click="opcja_1 = '1'" v-model="opcja_1"  class="btn btn-lg btn-outline-success">Dobrze</button>
              </div> 
              </div>
            </div>   
          </div> 
      </div> 
    <div class="row">
      <div class="col-auto col-3">
        <label class="control-label bold"> 
          <?php 
                $opcja_2 = key($main);
                echo change_name($opcja_2);
                next($main);
          ?> 
        </label>
      </div>
      <div class="col-9">  
        <div class="form-group ">
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-3" role="group" aria-label="First group">
              <button v-if="opcja_2 == '5'" type="button" v-on:click="opcja_2 = '5'" v-model="opcja_1" class="btn btn-lg btn-danger">Źle</button>
              <button v-else type="button" v-on:click="opcja_2 = '5'" v-model="opcja_1" class="btn btn-lg btn-outline-danger">Źle</button>
              
            </div>
            <div class="btn-group mr-3" role="group" aria-label="First group">
              <button v-if="opcja_2 == '4'" type="button" v-on:click="opcja_2 = '4'" v-model="opcja_2" class="btn btn-lg btn-warning">Raczej źle</button>
              <button v-else type="button" v-on:click="opcja_2 = '4'" v-model="opcja_2" class="btn btn-lg btn-outline-warning">Raczej źle</button>
              
            </div> 
            <div class="btn-group mr-3" role="group" aria-label="First group">  
              <button v-if="opcja_2 == '2'" type="button" v-on:click="opcja_2 = '2'" v-model="opcja_2" class="btn btn-lg btn-info">Raczej dobrze</button>
              <button v-else type="button" v-on:click="opcja_2 = '2'" v-model="opcja_2" class="btn btn-lg btn-outline-info">Raczej dobrze</button>
              
            </div> 
            <div class="btn-group mr-3" role="group" aria-label="First group"> 
              <button v-if="opcja_2 == '1'" type="button" v-on:click="opcja_2 = '1'" v-model="opcja_2" class="btn btn-lg btn-success">Dobrze</button>
              <button v-else type="button" v-on:click="opcja_2 = '1'" v-model="opcja_2" class="btn btn-lg btn-outline-success">Dobrze</button>
              
            </div> 
            </div>
          </div>           
        </div>
 
  </div>
    <div class="row">
      <div class="col-auto col-3">
        <label class="control-label bold"> 
          <?php 
                $opcja_3 = key($main);
                echo change_name($opcja_3);
                next($main);
          ?> 
        </label>
      </div>
      <div class="col-9">  
        <div class="form-group ">
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-3" role="group" aria-label="First group">
              <button v-if="opcja_3 == '5'" type="button" v-on:click="opcja_3 = '5'" v-model="opcja_3" class="btn btn-lg btn-danger">Źle</button>
              <button v-else type="button" v-on:click="opcja_3 = '5'" v-model="opcja_3" class="btn btn-lg btn-outline-danger">Źle</button>
            </div>
            <div class="btn-group mr-3" role="group" aria-label="First group">
              <button v-if="opcja_3 == '4'" type="button" v-on:click="opcja_3 = '4'" v-model="opcja_3" class="btn btn-lg btn-warning">Raczej źle</button>
              <button v-else type="button" v-on:click="opcja_3 = '4'" v-model="opcja_3" class="btn btn-lg btn-outline-warning">Raczej źle</button>
            </div> 
            <div class="btn-group mr-3" role="group" aria-label="First group">  
              <button v-if="opcja_3 == '2'" type="button" v-on:click="opcja_3 = '2'" v-model="opcja_3" class="btn btn-lg btn-info">Raczej dobrze</button>
              <button v-else type="button" v-on:click="opcja_3 = '2'" v-model="opcja_3" class="btn btn-lg btn-outline-info">Raczej dobrze</button>
            </div> 
            <div class="btn-group mr-3" role="group" aria-label="First group"> 
              <button v-if="opcja_3 == '1'" type="button" v-on:click="opcja_3 = '1'" v-model="opcja_3" class="btn btn-lg btn-success">Dobrze</button>
              <button v-else type="button" v-on:click="opcja_3 = '1'" v-model="opcja_3" class="btn btn-lg btn-outline-success">Dobrze</button>
            </div> 
          </div>
        </div>           
      </div>
    </div>
    <div class="row">
      <div class="col-auto col-3">
        <label class="control-label bold"> 
          <?php 
                $opcja_4 = key($main);
                echo change_name($opcja_4);
                next($main);
          ?> 
        </label>
      </div>
      <div class="col-9">  
        <div class="form-group ">
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-3" role="group" aria-label="First group">
              <button v-if="opcja_4 == '5'" type="button" v-on:click="opcja_4 = '5'" v-model="opcja_4" class="btn btn-lg btn-danger">Źle</button>
              <button v-else type="button" v-on:click="opcja_4 = '5'" v-model="opcja_4" class="btn btn-lg btn-outline-danger">Źle</button>
            </div>
            <div class="btn-group mr-3" role="group" aria-label="First group">
              <button v-if="opcja_4 == '4'" type="button" v-on:click="opcja_4 = '4'" v-model="opcja_4" class="btn btn-lg btn-warning">Raczej źle</button>
              <button v-else type="button" v-on:click="opcja_4 = '4'" v-model="opcja_4" class="btn btn-lg btn-outline-warning">Raczej źle</button>
            </div> 

            <div class="btn-group mr-3" role="group" aria-label="First group">  
              <button v-if="opcja_4 == '2'" type="button" v-on:click="opcja_4 = '2'" v-model="opcja_4" class="btn btn-lg btn-info">Raczej dobrze</button>
              <button v-else type="button" v-on:click="opcja_4 = '2'" v-model="opcja_4" class="btn btn-lg btn-outline-info">Raczej dobrze</button>
            </div> 
            <div class="btn-group mr-3" role="group" aria-label="First group"> 
              <button v-if="opcja_4 == '1'" type="button" v-on:click="opcja_4 = '1'" v-model="opcja_4" class="btn btn-lg btn-success">Dobrze</button>
              <button v-else type="button" v-on:click="opcja_4 = '1'" v-model="opcja_4" class="btn btn-lg btn-outline-success">Dobrze</button>
            </div> 
            </div>
          </div>           
        </div>

    </div>
    <div class="row">
      <div class="col-auto col-3">
        <label class="control-label bold"> 
          <?php 
                $opcja_5 = key($main);
                echo change_name($opcja_5);
                next($main);
          ?> 
        </label>
      </div>
      <div class="col-9">  
        <div class="form-group ">
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-3" role="group" aria-label="First group">
              <button v-if="opcja_5 == '5'" type="button" v-on:click="opcja_5 = '5'" v-model="opcja_5" class="btn btn-lg btn-danger">Źle</button>
              <button v-else type="button" v-on:click="opcja_5 = '5'" v-model="opcja_5" class="btn btn-lg btn-outline-danger">Źle</button>
            </div>
            <div class="btn-group mr-3" role="group" aria-label="First group">
              <button v-if="opcja_5 == '4'" type="button" v-on:click="opcja_5 = '4'" v-model="opcja_5" class="btn btn-lg btn-warning">Raczej źle</button>
              <button v-else type="button" v-on:click="opcja_5 = '4'" v-model="opcja_5" class="btn btn-lg btn-outline-warning">Raczej źle</button>
            </div> 

            <div class="btn-group mr-3" role="group" aria-label="First group">  
              <button v-if="opcja_5 == '2'" type="button" v-on:click="opcja_5 = 'Raczej_dobrze'" v-model="opcja_5" class="btn btn-lg btn-info">Raczej dobrze</button>
              <button v-else type="button" v-on:click="opcja_5 = '2'" v-model="opcja_5" class="btn btn-lg btn-outline-info">Raczej dobrze</button>
            </div> 
            <div class="btn-group mr-3" role="group" aria-label="First group"> 
              <button v-if="opcja_5 == '1'" type="button" v-on:click="opcja_5 = '1'" v-model="opcja_5" class="btn btn-lg btn-success">Dobrze</button>
              <button v-else type="button" v-on:click="opcja_5 = '1'" v-model="opcja_5" class="btn btn-lg btn-outline-success">Dobrze</button>
            </div> 
            </div>
          </div>           
        </div>
        </div>
          <form action="post/post_rate.php" method="POST">
            <input type="hidden" name="opcja_1" v-model="opcja_1">
            <input type="hidden" name="opcja_2" v-model="opcja_2">
            <input type="hidden" name="opcja_3" v-model="opcja_3">
            <input type="hidden" name="opcja_4" v-model="opcja_4">
            <input type="hidden" name="opcja_5" v-model="opcja_5">
            <input type="hidden" name="opcja_1_title" value="<?php print $opcja_1 ?>">
            <input type="hidden" name="opcja_2_title" value="<?php print $opcja_2 ?>">
            <input type="hidden" name="opcja_3_title" value="<?php print $opcja_3 ?>">
            <input type="hidden" name="opcja_4_title" value="<?php print $opcja_4 ?>">
            <input type="hidden" name="opcja_5_title" value="<?php print $opcja_5 ?>">
            <input v-if="opcja_1 != '' && opcja_2 != '' && opcja_3 != '' && opcja_4 != '' && opcja_5 != '' " type="submit" name="send" class="btn btn-lg btn-block btn-success" >
            <input v-else type="submit" name="send" class="btn btn-lg btn-block btn-outline-secondary disabled" disabled > 
          </form>
        </div>
      </div>
    </div>
  </div>  
            
<script>
   new Vue({
          el: '#App',
          data: {
            opcja_1: '',
            opcja_2: '',          
            opcja_3: '',
            opcja_4: '',
            opcja_5: ''
            }
          
        })
</script>  


      