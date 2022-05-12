<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js'></script>
    <script>
    $(document).ready(function(){
      var startDate;
      var endDate;
      $('#packagetimestart').datepicker({
        dateFormat;'dd-mm-yy'
      });
      $('#packagetimeend').datepicker({
        dateFormat;'dd-mm-yy'
      })
    $('#packagetimestart').change(function({
      startDate=$(this).datepicker('getDate');
      $('#packagetimeend').datepicker('option','minDate',startDate);
    });
    $('#packagetimeend').change(function({
      endDate=$(this).datepicker('getDate');
      $('#packagetimestart').datepicker('option','maxDate',endDate);
    });
  });
    </script>