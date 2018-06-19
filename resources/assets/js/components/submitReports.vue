<template>
<div>

	<!--Beginning of monthly reports -->
	
   <div class="container" v-if="type=='monthly'">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default form-panel">
               <div class="panel-heading custom-panel-heading"><h2>Submit Monthly Spiritual Report</h2></div> 
				<img class="card-img-top img-fluid form-image-position" :src="this.trem2" alt="Responsive image">
                <div class="panel-body">
                    <form class="form-horizontal form-position" method="POST" action="/send/report">
					<input type="hidden" name="_token" :value="csrf">
						 <div class="form-group">
						 <label for="report" class="col-md-4 control-label">Report Type</label>
						  <div class="col-md-6">
						  <select id="report" class="form-control custom-select" name="report" v-model="type" required>
								<option value= "monthly" selected="selected"><h2>Monthly Report</h2></option>
								<option value= "weekly">Weekly Report</option>
								<option value= "g12" >G12 Report</option>
								</select>
							</div>	
							</div>
						<div class="form-group">
                            <label for="branch" class="col-md-4 control-label">Branch</label>

                            <div class="col-md-6">
                                <select id="branch" class="form-control" name="branch" required>
								<option :value="this.authbranch">{{this.authbranch}}</option>
								
								</select>
								
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" :value="this.authname" required autofocus>
                            </div>
							
                        </div>
						
						<div class="form-group">
                            <label for="date" class="col-md-4 control-label">Reporting For </label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="" required>
                            </div>
                        </div>
						
						
						
						<div class="form-group">
                            <label for="sectiona" class="col-md-4 control-label">Section A</label>
							<h6>Membership: <em>(Fill in the numbers as in your branch register)</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Adults</label>

                            <div class="col-md-6">
                                <input id="adults" type="number" class="form-control" name="adults" value="" placeholder="Numbers required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Children</label>

                            <div class="col-md-6">
                                <input id="children" type="number" class="form-control" name="children" value="" placeholder="Numbers required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="total" class="col-md-4 control-label">Total</label>

                            <div class="col-md-6">
                                <input id="total" type="number" class="form-control" name="total" value=" " placeholder="Numbers required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="sectionb" class="col-md-4 control-label">Section B</label>
							<h6><em>Ministries In Training, (MIT)</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="tithers" class="col-md-4 control-label">Tithers</label>

                            <div class="col-md-6">
                                <input id="tithers" type="number" class="form-control" name="tithers" value=" " placeholder="Numbers required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="newmembers" class="col-md-4 control-label">New Members Received</label>

                            <div class="col-md-6">
                                <input id="newmembers" type="number" class="form-control" name="newmembers" value="" placeholder="Numbers required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="sectionc" class="col-md-4 control-label">Section C</label>
							<h6><em>Other Activities</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="councilmeetings" class="col-md-4 control-label">Council Meetings</label>

                            <div class="col-md-6">
                                <input id="councilmeetings" type="number" class="form-control" name="councilmeetings" value="" placeholder="Numbers required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="specialactivities" class="col-md-4 control-label">Special Activities</label>

                            <div class="col-md-6">
                                <input id="specialactivities" type="number" class="form-control" name="specialactivities" value="" placeholder="Numbers required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="specialcomments" class="col-md-4 control-label">Comments</label>

                            <div class="col-md-6">
                                <input id="specialcomments" type="text" class="form-control" name="specialcomments" value="" placeholder="On special Activites" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="branchprojects" class="col-md-4 control-label">Branch Projects</label>

                            <div class="col-md-6">
                                <input id="branchprojects" type="number" class="form-control" name="branchprojects" value="" placeholder="Numbers required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="projectcomments" class="col-md-4 control-label">Comments</label>

                            <div class="col-md-6">
                                <input id="projectcomments" type="text" class="form-control" name="projectcomments" value="" placeholder="On Branch Projects" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="sectiond" class="col-md-4 control-label">Section D</label>
							<h6><em>Group Membership</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="cmf" class="col-md-4 control-label">Christian Men Fellowship</label>

                            <div class="col-md-6">
                                <input id="cmf" type="number" class="form-control" name="cmf" value="" placeholder="Number required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="cwf" class="col-md-4 control-label">Christian Women Fellowship</label>

                            <div class="col-md-6">
                                <input id="cwf" type="number" class="form-control" name="cwf" value="" placeholder="Number required" required>
                            </div>
                        </div>
						
						
						<div class="form-group">
                            <label for="cyf" class="col-md-4 control-label">Christian Youth Fellowship</label>

                            <div class="col-md-6">
                                <input id="cyf" type="number" class="form-control" name="cyf" value="" placeholder="Number required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="rc" class="col-md-4 control-label">Royal Children</label>

                            <div class="col-md-6">
                                <input id="rc" type="number" class="form-control" name="rc" value="" placeholder="Number required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="sectione" class="col-md-4 control-label">Section E</label>
							<h6><em>Monthly G12 report</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="newcells" class="col-md-4 control-label">New Cells</label>

                            <div class="col-md-6">
                                <input id="newcells" type="number" class="form-control" name="newcells" value="" placeholder="Number required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="totalcells" class="col-md-4 control-label">Total Cells</label>

                            <div class="col-md-6">
                                <input id="totalcells" type="number" class="form-control" name="totalcells" value="" placeholder="Number required" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Submit Report
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End of monthly reports -->

<!--Begining of weekly reports -->
	
   <div class="container" v-if="type=='weekly'">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default form-panel">
               <div class="panel-heading custom-panel-heading"><h2>Submit Weekly Spiritual Report</h2></div> 
				<img class="card-img-top img-fluid form-image-position" :src="this.trem2" alt="Responsive image">
                <div class="panel-body">
                    <form class="form-horizontal form-position" method="POST" action="/send/report">
					<input type="hidden" name="_token" :value="csrf">
						 <div class="form-group">
						 <label for="report" class="col-md-4 control-label">Report Type</label>
						  <div class="col-md-6">
						  <select id="report" class="form-control custom-select" name="report" v-model="type" required>
								<option value= "monthly" ><h2>Monthly Report</h2></option>
								<option value= "weekly" selected="selected">Weekly Report</option>
								<option value= "g12" >G12 Report</option>
								</select>
							</div>	
							</div>
						<div class="form-group">
                            <label for="branch" class="col-md-4 control-label">Branch</label>

                            <div class="col-md-6">
                                <select id="branch" class="form-control" name="branch" required>
								<option :value="this.authbranch">{{this.authbranch}}</option>
								
								</select>
								
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" :value="this.authname" required autofocus>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label for="date" class="col-md-4 control-label">Reporting For </label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="weeklyreport" class="col-md-4 control-label">Weekly</label>
							<h6><em>Fill in the numbers as in your branch register</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="event" class="col-md-4 control-label">Event</label>

                            <div class="col-md-6">
                                <input id="event" type="text" class="form-control" name="event" value="" placeholder="e.g: Sunday Service" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="men" class="col-md-4 control-label">Men</label>

                            <div class="col-md-6">
                                <input id="men" type="number" class="form-control" name="men" value="" placeholder="Number required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="women" class="col-md-4 control-label">Women</label>

                            <div class="col-md-6">
                                <input id="women" type="number" class="form-control" name="women" value="" placeholder="Number required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="children" class="col-md-4 control-label">Children</label>

                            <div class="col-md-6">
                                <input id="children" type="number" class="form-control" name="children" value="" placeholder="Number required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="total" class="col-md-4 control-label">Total</label>

                            <div class="col-md-6">
                                <input id="total" type="number" class="form-control" name="total" value="" placeholder="Number required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="preacher" class="col-md-4 control-label">Preacher</label>

                            <div class="col-md-6">
                                <input id="preacher" type="text" class="form-control" name="preacher" value="" placeholder="Name required" required>
                            </div>
                        </div>
						
						

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Submit Report
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End of weekly reports -->

<!--Begining of G12 reports -->
	
   <div class="container" v-if="type=='g12'">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default form-panel">
               <div class="panel-heading custom-panel-heading"><h2>Submit G12 Weekly Report</h2></div> 
				<img class="card-img-top img-fluid form-image-position" :src="this.trem2" alt="Responsive image">
                <div class="panel-body">
                    <form class="form-horizontal form-position" method="POST" action="/send/report">
					<input type="hidden" name="_token" :value="csrf">
						 <div class="form-group">
						 <label for="report" class="col-md-4 control-label">Report Type</label>
						  <div class="col-md-6">
						  <select id="report" class="form-control custom-select" name="report" v-model="type" required>
								<option value= "monthly" ><h2>Monthly Report</h2></option>
								<option value= "weekly">Weekly Report</option>
								<option value= "g12" selected="selected">G12 Report</option>
								</select>
							</div>	
							</div>
						<div class="form-group">
                            <label for="branch" class="col-md-4 control-label">Branch</label>

                            <div class="col-md-6">
                                <select id="branch" class="form-control" name="branch" required>
								<option :value="this.authbranch">{{this.authbranch}}</option>
								
								</select>
								
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" :value="this.authname" required autofocus>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="date" class="col-md-4 control-label">Reporting For </label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="g12reports" class="col-md-4 control-label">G12</label>
							<h6><em>Fill in the numbers as in your branch register</em></h6>
                        </div>
						
						
						<div class="form-group">
                            <label for="weeknumber" class="col-md-4 control-label">Week Number</label>

                            <div class="col-md-6">
                                <input id="weeknumber" type="number" class="form-control" name="weeknumber" value="" placeholder="Number required" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="attendance" class="col-md-4 control-label">Attendance</label>

                            <div class="col-md-6">
                                <input id="attendance" type="number" class="form-control" name="attendance" value="" placeholder="Number required" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Submit Report
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End of G12 reports -->

</div>
</template>

<script>
    export default {
        mounted() {
            
        },
		props: ['user-id', 'trem2', 'authbranch', 'authname'],
		
		data() {
		
		return {
		
		type: 'monthly',
		csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
		
		}
		
		
		}
    }
</script>