function showChart(a,e,t,n){var i=a.getContext("2d"),o=new Chart(i,{type:e,data:t,options:n});return o}function showRadialIndicator(a,e,t){$(a).radialIndicator({barColor:t,barWidth:8,initValue:0,roundCorner:!0,percentage:!0});var n=$(a).data("radialIndicator");return n.animate(e),null}function showCircleProgressbar(a,e,t){var n=new ProgressBar.Circle(a,{color:t,strokeWidth:6,trailWidth:2,easing:"easeInOut",duration:1400,text:{autoStyleContainer:!1},from:{color:"#efefef",width:2},to:{color:t,width:6},step:function(a,e){e.path.setAttribute("stroke",a.color),e.path.setAttribute("stroke-width",a.width);var t=Math.round(100*e.value());0===t?e.setText(""):e.setText(t+"%")}});return n.text.style.fontFamily='"Roboto", sans-serif',n.text.style.fontSize="2rem",n.animate(e/100),n}$("#top-nav").find("#link_1").on("click",function(){$(this).parent("li").hasClass("open")?($(this).parent("li").removeClass("open"),$("#subnav_1").css("margin-top","0")):($(this).parent("li").addClass("open"),$(this).parent("li").siblings().removeClass("open"),$("#subnav_1").css("margin-top","3.875rem"),$("#subnav_2").css("margin-top","0"))}),$("#top-nav").find("#link_2").on("click",function(){$(this).parent("li").hasClass("open")?($(this).parent("li").removeClass("open"),$("#subnav_2").css("margin-top","0")):($(this).parent("li").addClass("open"),$(this).parent("li").siblings().removeClass("open"),$("#subnav_2").css("margin-top","3.875rem"),$("#subnav_1").css("margin-top","0"))}),$("#top-nav").find("#link_utilitas").on("click",function(){$(this).parent("li").siblings().removeClass("open"),$(".sub-nav").css("margin-top","0")}),$(function(){$('[data-toggle="tooltip"]').tooltip()}),$.extend(!0,$.fn.dataTable.defaults,{language:{paginate:{next:"Next",previous:"Prev"},zeroRecords:"Tidak ada data yang ditemukan",emptyTable:"Tabel kosong",infoEmpty:"Tidak ada data",info:"Menampilkan _START_-_END_ dari _TOTAL_ data",infoFiltered:"(tersaring dari _MAX_ total data)"},pagingType:"simple_numbers"}),$(".selectpicker").selectpicker({iconBase:"fa",tickIcon:"fa-check",deselectAllText:"Hapus semua",selectAllText:"Pilih semua",noneSelectedText:"-"}),$(".picker-datetime").datetimepicker({icons:{time:"fa fa-clock-o",date:"fa fa-calendar",up:"fa fa-arrow-up",down:"fa fa-arrow-down",previous:"fa fa-chevron-left",next:"fa fa-chevron-right",today:"fa fa-calendar-times-o",clear:"fa fa-trash",close:"fa fa-times"}}),$(".picker-date").datetimepicker({icons:{time:"fa fa-clock-o",date:"fa fa-calendar",up:"fa fa-arrow-up",down:"fa fa-arrow-down",previous:"fa fa-chevron-left",next:"fa fa-chevron-right",today:"fa fa-calendar-times-o",clear:"fa fa-trash",close:"fa fa-times"},format:"DD/MM/YYYY"}),$(".picker-time").datetimepicker({icons:{time:"fa fa-clock-o",date:"fa fa-calendar",up:"fa fa-arrow-up",down:"fa fa-arrow-down",previous:"fa fa-chevron-left",next:"fa fa-chevron-right",today:"fa fa-calendar-times-o",clear:"fa fa-trash",close:"fa fa-times"},format:"LT"});