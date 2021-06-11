<?php

$data = file_get_contents("https://api.covid19api.com/summary");
$covidata = json_decode($data);

?>
<table class=" is-hoverable is-selected table is-fullwidth

" id="myTable">
  <thead style="background-color: #fafefa; color:white !important;">
    <tr>
      <th><abbr title="Position"></abbr></th>
      <th>Country</th>
      <th><abbr title="Played">Total Confirmed</abbr></th>
      <th><abbr title="Won">CPM</abbr>
      <div uk-drop>
        <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
    </div>

      </th>
      <th><abbr title="Drawn">Deseased</abbr></th>
      <th><abbr title="Lost">DPM</abbr></th>
      <th><abbr title="Goals for">Tests</abbr></th>
      <th><abbr title="Goals against">Active</abbr></th>
      <th><abbr title="Goal difference">Recovered</abbr></th>
      <th><abbr title="Points">RPM</abbr></th>
      <th><abbr title="Vaccinated">Vaccinated</abbr></th>
      
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th><abbr title="Position">Pos</abbr></th>
      <th>Team</th>
      <th><abbr title="Played">Pld</abbr></th>
      <th><abbr title="Won">W</abbr></th>
      <th><abbr title="Drawn">D</abbr></th>
      <th><abbr title="Lost">L</abbr></th>
      <th><abbr title="Goals for">GF</abbr></th>
      <th><abbr title="Goals against">GA</abbr></th>
      <th><abbr title="Goal difference">GD</abbr></th>
      <th><abbr title="Points">Pts</abbr></th>
      <th><abbr title="Vaccinated">Vaccinated</abbr></th>
     
    </tr>
  </tfoot>
  <tbody>
    <tr>
      <th uk-icon="lifesaver"></th>
     
      </tr>
  
  </tbody>
</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>