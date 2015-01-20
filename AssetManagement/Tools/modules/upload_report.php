<h1><?php echo "Upload Report" ?></h1>
    <form action="/AssetManagement/Tools/modules/getfile.php" method="post" enctype="multipart/form-data">
<label for="file">Please Browse Report File Here:</label>

<input type="file" name="file" id="file" ><br>
<input  type="hidden" name="Fname" value="" /></p>
</br>
<label>ToolNumber (If Assigned)</label>
<input  type="text" name="Tool_Number"  />
<br></br>
<label>Job Number </label>
<input  type="text" name="Job_Number"  />
<br></br>
<input type="radio" name="run_numb"
<?php if (isset($run_numb) && $run_numb=="precise") echo "checked";?>
value="precise">Precise
<input type="radio" name="run_numb"
<?php if (isset($run_numb) && $run_numb=="estimated") echo "checked";?>
value="estimated">Estimated
<br></br>
<label>Run Time</label>
<input  type="text" name="Run_Time"  />
<br></br>

<label>Inspectecd_By</label>
<input  type="text" name="Inspectecd_By"  />
<br></br>
<label>Date</label>
<input  type="date" name="Date"  />
<br></br>
<label>Comments</label><br></br>

<textarea name="Comments" cols="50" rows="5">

</textarea>


<br></br>




<input type="submit"  class="btn btn-success" name="submit" value="Submit">


</form>