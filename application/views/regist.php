<link rel="stylesheet" type="text/css" href="assets/css/contact.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
<div class="container con950">
  <h1 class="head1">Registration</h1>
  <hr>
	<div class="row" style="font-family:'Roboto'">	
		<div class="col-md-8">
			<h3 style="margin-top:5px;">Registration Fees</h3>
			<h4>International / Foreign Participant*</h4>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Category</th>
						<th>Early Payment</th>
						<th>Regular</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Speaker</td>
						<td>USD 250</td>
						<td>USD 300</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Next paper</td>
						<td>USD 100</td>
						<td>USD 125</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Non-Speaker</td>
						<td>USD 175</td>
						<td>USD 200</td>
					</tr>									
				</tbody>
			</table>
			<p>* IEEE Member get a 10% discount <br>
			<b>IEEE Member participants should input their IEEE ID</b>
			<br>
			<br>
			<h4>IEEE Student Member</h4>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Category</th>
						<th>Early Payment</th>
						<th>Regular</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Speaker</td>
						<td>USD 200</td>
						<td>USD 250</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Next paper</td>
						<td>USD 100</td>
						<td>USD 125</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Non-Speaker</td>
						<td>USD 130</td>
						<td>USD 150</td>
					</tr>										
				</tbody>
			</table>
			<b>IEEE Student participants should input their Student ID</b>
			<br>
			<br>
			<h4>Domestic/Local Participant*</h4>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Category</th>
						<th>Early Payment</th>
						<th>Regular</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Speaker</td>
						<td>IDR 2.000.000</td>
						<td>IDR 2.500.000</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Next paper</td>
						<td>IDR 1.000.000</td>
						<td>IDR 1.250.000</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Non-Speaker</td>
						<td>IDR 1.250.000</td>
						<td>IDR 1.500.000</td>
					</tr>								
				</tbody>
			</table>
			<p>* IEEE Member get a 10% discount <br>
			<b>IEEE Member participants should input their IEEE ID</b>
			<br>
			<br>
			<h4>Payment Information</h4>
			Payment Should be made via bank transfer to the following:
			<ul>
				<li>Domestic (IDR) <br>Bank: <b>BNI Universitas Pendidikan Indonesia</b><br>Account Holder's Name: <b>NOVI SOFIA FITRIASARI</b><br>Account Number:<b> 0473648747</b></li>
				<li>International Author (USD)<br>Bank: <b>BNI Universitas Pendidikan Indonesia</b><br>Account Holder's Name: <b>NOVI SOFIA FITRIASARI</b><br>Account Number: <b>0473649762</b></li>
				<p>Swift Code : Bank Negara Indonesia (BNI) <b>BNINIDJA</b></p>
			</ul>
			<br>
			<h4>Registration Note</h4>
			<ul>
				<li>Check your name spelling, because it will be used for the invitation letter/conference certificate.</li>
				<li>Registartion fee included :
					<ul>
						<li>Seminar Kits</li>
						<li>Access to all sessions in ICSITech 2017 including: Plenary Sessions, Conference Track Presentations, Conference Dinner: Awards and Information Exchange</li>
						<li>Coffee Breaks, lunches, Dinner, and Conference proceeding (CD/USB).</li>
					</ul>
				</li>
				<li>Registration fee <b>does not include accommodation</b></li>
				<li>The Payment is non-refundable</li>
			</ul>
		</div>
		
		<div class="col-md-4">
			<p class="papi">Form Register</p>
			<hr style="margin-top:8px;">
			<form action="#" method="post">
             <div class="row">
                 <div class="form-group col-lg-12 col-md-12 col-sm-12 slideanim">
                     <input type="text" class="form-control first-name" name="fullname" placeholder="Full Name" required/>
                 </div>
                 <div class="form-group col-lg-12 col-md-12 col-sm-12 slideanim">
                     <input type="text" class="form-control last-name" name="affiliation" placeholder="Affiliation" required/>
                 </div>
                 <div class="form-group col-lg-12 col-md-12 col-sm-12 slideanim">
                     <input type="tel" class="form-control mail" name="phone" placeholder="Phone" required/>
                 </div>
                 <div class="form-group col-lg-12 col-md-12 col-sm-12 slideanim">
                     <input type="email" class="form-control pno" name="mail" placeholder="Email" required/>
                 </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 slideanim">
                     <input type="text" class="form-control pno" name="paperid" placeholder="Paper ID" required/>
                 </div>
                 <div class="form-group col-lg-12 col-md-12 col-sm-12 slideanim">
                     <input type="text" class="form-control pno" name="title" placeholder="Paper Title" required/>
                 </div>
                 <div class="form-group col-lg-12 col-md-12 col-sm-12 slideanim">
					 <select name="categories" class="form-control" style="border-radius: 0px; height: 65px; border: 1px solid #000; font-size: 18px; padding-left: 15px;" required>
					   <option value="" disabled selected>Categories</option>
					   <optgroup label="-International-">
					   <option value="isp">Speaker</option>
					   <option value="inp">Next Paper</option>
					   <option value="insp">Non-Speaker</option>
					   <optgroup label="-IEEE Student Member-">
					   <option value="ssp">Speaker</option>
					   <option value="snp">Next Paper</option>
					   <option value="snsp">Non-Speaker</option>
					   <optgroup label="-Domestic-">
					   <option value="dsp">Speaker</option>
					   <option value="dnp">Next Paper</option>
					   <option value="dnsp">Non-Speaker</option>
					 </select>
				 </div>
				 <div class="form-group col-lg-12 col-md-12 col-sm-12 slideanim">
				 <b>For IEEE Student Member</b>
                     <input type="text" class="form-control pno" name="title" placeholder="Student ID"/>
                 </div>
				 <div class="form-group col-lg-12 col-md-12 col-sm-12 slideanim">
				 <b>For IEEE Member</b>
                     <input type="text" class="form-control pno" name="title" placeholder="IEEE ID"/>
                 </div>
                 <div class="form-group col-lg-12 col-md-12 col-sm-12 slideanim">
                 		<b>Payment Document</b>
                     <input type="file" class="form-control" name="title" placeholder="Document" required/>
                 </div>                                   
                 <div class="clearfix"></div>
                 <div class="form-group col-lg-12 slideanim">
                 		<center>
                 			
                     <button type="submit" class="btn btn-lg btn-outline">Submit</button>
                 		</center>
                 </div>
             </div>
         </form>
		</div>
		</div>
 </div>

<br>
<br>
<br>