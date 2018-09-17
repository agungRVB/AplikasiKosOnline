 <?php
  //if ($this->session->userdata('username')==null) {
  //  redirect('');
  //}else{
?>
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
       &nbsp;<!--<strong>Copyright &copy; 2016 Dinus Students </strong> All rights reserved.-->
    </footer>
    </div>
    <!-- jQuery 2.1.4 -->
    <script src="../style/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../style/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../style/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../style/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../style/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../style/admin/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../style/admin/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../style/admin/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
    </script>
    <!=================================================================================>
    <!-- Select2 -->
    <script src="../style/admin/plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="../style/admin/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../style/admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../style/admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../style/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../style/admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="../style/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../style/admin/plugins/iCheck/icheck.min.js"></script>
    <!-- Page script -->
    <script>
      $(function () {


        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();


        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
        /*/Initialize Select2 Elements
        $(".select2").select2();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );*/
      });
    </script>
    <!=================================================================================>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url('style/admin/plugins/fullcalendar/fullcalendar.min.js')?>"></script>
    <!-- Page specific script -->
    <!-- Page specific script -->
    <script>
      $(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
          ele.each(function () {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
              title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
              zIndex: 1070,
              revert: true, // will cause the event to go back to its
              revertDuration: 0  //  original position after the drag
            });

          });
        }
        ini_events($('#external-events div.external-event'));

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();
        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          buttonText: {
            today: 'today',
            month: 'month',
            week: 'week',
            day: 'day'
          },
          //Random default events
          events: [
            <?php
            //  $link = mysqli_connect("localhost","root","","management_projek");
            //  $result = mysqli_query($link, "select keterangan, warna, day(mulai)as harim, month(mulai)as bulanm, year(mulai) as tahunm, day(selesai) as haris, month(selesai) as bulans, year(selesai) as tahuns from calendar");

              //while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)) {
              //  $warna=$row['warna'];


                    //  $tgl_mulai=$row['harim'];
                    //  $bln_mulai=$row['bulanm']-1;
                    //  $thn_mulai=$row['tahunm'];

                    //  $tgl_selesai=$row['haris']+1;
                    //  $bln_selesai=$row['bulans']-1;
                    //  $thn_selesai=$row['tahuns'];
                    ?>//{
                        title: '<?php //echo $row['keterangan']?>',
                        start: new Date(<?php// echo $thn_mulai?>, <?php //echo $bln_mulai?>, <?php// echo $tgl_mulai?>),
                        end: new Date(<?php //echo $thn_selesai?>, <?php echo $bln_selesai?>, <?php //echo $tgl_selesai?>),
                        allDay: true,
                        backgroundColor: "<?php// echo $warna?>", //Blue
                        borderColor: "<?php //echo $warna?>" //Blue
                      },
                    <?php
                //}
            ?>
            { title: ' ',  // digunakan untuk mengatasi jika kalender tanpa agenda inputan
              start: new Date(2016, 1, 1, 1, 0), //tahun, bulan+1, tanggal, jam, 0
              end: new Date(2016, 1, 1, 1, 0),
              allDay: true,
              backgroundColor: "#fff", //Info (aqua)
              borderColor: "#fff" //Info (aqua)
            }
          ],
          editable: false,
          droppable: false, // this allows things to be dropped onto the calendar !!!
          drop: function (date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            copiedEventObject.backgroundColor = $(this).css("background-color");
            copiedEventObject.borderColor = $(this).css("border-color");

            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
              // if so, remove the element from the "Draggable Events" list
              $(this).remove();
            }

          }
        });
      });
    </script>
    <script type="text/javascript">
      $(function () {
        var currColor = "#3c8dbc"; //Red by default
        //Color chooser button
        var colorChooser = $("#color-chooser-btn");
        $("#color-chooser > li > a").click(function (e) {
            e.preventDefault();
            //Save color
            currColor = $(this).css("color");
            //Add color effect to button
            $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
        });

        $("#add-new-event").click(function (e) {
            e.preventDefault();
            //Get value and make sure it is not null
            var val = $("#new-event").val();
              if (val.length == 0) {
                return;
              }
            //Create events
            var event = $("<div />");
            event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
            event.html(val);
            $('#external-events').prepend(event);
            //Add draggable funtionality
            ini_events(event);
            //Remove event from text input
            $("#new-event").val("");
        });
      });
      function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;
        }
  </script>
  <!============================================================================================================grafik>
    <!-- ChartJS 1.0.1 -->
    <script src="../style/admin/plugins/chartjs/Chart.min.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas);

        var areaChartData = {
          labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
          datasets: [
            {
              label: "Payment",
              fillColor: "#059CC8",
              strokeColor: "#05B8C8",
              pointColor: "#05B8C8",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
              data: [
              <?php
              //  $link = mysqli_connect("localhost","root","","management_projek");
              //  $loop=1;
              //  $now = date("Y");
              //  while ($loop<=12) {
                //      $result2 = mysqli_query($link, "select sum(jumlah) as jml from payment where month(tgl_bayar)='$loop' and year(tgl_bayar)='$now'");
                //      $row2= mysqli_fetch_array($result2) ;
                //        if($row2['jml']==""){
                //        echo "0,";
                //      }
                //      else {
                //        echo $row2['jml'].",";
                //      }
                //$loop++;
                //}
              ?>
              ]
            }
          ]
        };

        var areaChartOptions = {
          //Boolean - If we should show the scale at all
          showScale: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: true, //===============================================================================> grid
          //String - Colour of the grid lines
          scaleGridLineColor: "#eee",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: false,
          //Boolean - Whether the line is curved between points
          bezierCurve: true,
          //Number - Tension of the bezier curve between points
          bezierCurveTension: 0.3,
          //Boolean - Whether to show a dot for each point
          pointDot: false, //========================================================================================> point
          //Number - Radius of each point dot in pixels
          pointDotRadius: 10,
          //Number - Pixel width of point dot stroke
          pointDotStrokeWidth: 0,
          //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
          pointHitDetectionRadius: 20,
          //Boolean - Whether to show a stroke for datasets
          datasetStroke: true,
          //Number - Pixel width of dataset stroke
          datasetStrokeWidth: 2,
          //Boolean - Whether to fill the dataset with a color
          datasetFill: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true
        };

        //Create the line chart
        areaChart.Line(areaChartData, areaChartOptions);


        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
      });
    </script>

  </body>
</html>
<?php
  //  }
?>
