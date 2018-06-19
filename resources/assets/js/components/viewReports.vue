<template>
<div>

<!--Beginning of select reports -->
	
   <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default form-panel">
               <div class="panel-heading custom-panel-heading"><h2>{{this.type.charAt(0).toUpperCase() + this.type.substr(1)}} Spiritual Reports</h2></div> 
				<img class="card-img-top img-fluid form-image-position" :src="this.trem2" alt="Responsive image">
                <div class="panel-body">
                    <div class="form-horizontal form-position">
					
						
					<div class="form-group">
						<label for="report" class="col-md-4 control-label">Report Type</label>
						 <div class="col-md-6">
						     <select id="report" class="form-control custom-select" name="report" v-model="type" @change="clearStore()" required>
								<option value= "monthly"><h2>Monthly Report</h2></option>
								<option value= "weekly">Weekly Report</option>
								<option value= "g12" >G12 Report</option>
							  </select>
						  </div>	
					</div>
					
					<div class="form-group" v-if="this.id==1">
                            <label for="branch" class="col-md-4 control-label">Branch</label>

                            <div class="col-md-6">
                                <select id="branch" class="form-control" name="branch" v-model="branch" @change="clearStore()" required>
								<option :value="this.authbranch">{{this.authbranch}}</option>
								<option value= "Ak" >Akoka</option>
								<option value= "VI" >Victoria Island</option>
								</select>
								
                            </div>
                      </div>
					  
					  <div class="form-group" v-if="this.id!=1">
                            <label for="branch" class="col-md-4 control-label">Branch</label>

                            <div class="col-md-6">
                                <select id="branch" class="form-control" name="branch" v-model="branch" required>
								<option :value="this.authbranch">{{this.authbranch}}</option>
								</select>
								
                            </div>
                      </div>
					  
					  <div class="form-group">
                            <label for="year" class="col-md-4 control-label">Year</label>

                            <div class="col-md-6">
                               <input type="number"  name="year" v-model="year" @change="clearStore()"/>
								
                            </div>
                      </div>
					  
					  
					<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-primary" @click="getNewReports()">
                                   View Reports
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End of select reports -->

<!--Beginning of view monthly reports -->
	<div  v-for="report in this.store">
   <div class="container" v-if="type=='monthly' && report.sectiond.cyf">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" >
            <div class="panel panel-default form-panel">
               <div class="panel-heading custom-panel-heading"><process-date :date="report.date"></process-date></div> 
				<img class="card-img-top img-fluid form-image-position" src="http://localhost:8000/storage/images/tremlogo2.jpg" alt="Responsive image">
                <div class="panel-body">
                    <div class="form-horizontal form-position" method="POST" action="/send/report">
					
						 <div class="form-group">
						 <label for="report" class="col-md-4 control-label">Report Type:</label>
						  <div class="col-md-6">
						  <h5>
                                Monthly report
							</h5>
							</div>	
							</div>
						<div class="form-group">
                            <label for="branch" class="col-md-4 control-label">Branch:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.branch}}
							</h5>
								
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Reported by:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.name}}
							</h5>
								
                            </div>
							
                        </div>
						
						<div class="form-group">
                            <label for="date" class="col-md-4 control-label">Report Date:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.date}}
							</h5>
								
                            </div>
                        </div>
						
						
						
						<div class="form-group">
                            <label for="sectionb" class="col-md-4 control-label">Section A</label>
							<h6><em>Membership</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Adults:</label>
							
                            <div class="col-md-6">
							<h5>
                                {{report.sectiona.adults}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Children:</label>

                           <div class="col-md-6">
							<h5>
                                {{report.sectiona.children}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="total" class="col-md-4 control-label">Total:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectiona.total}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="sectionb" class="col-md-4 control-label">Section B</label>
							<h6><em>Ministries In Training, (MIT)</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="tithers" class="col-md-4 control-label">Tithers:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectionb.tithers}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="newmembers" class="col-md-4 control-label">New Members Received:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectionb.newmembers}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="sectionc" class="col-md-4 control-label">Section C</label>
							<h6><em>Other Activities</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="councilmeetings" class="col-md-4 control-label">Council Meetings:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectionc.councilmeetings}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="specialactivities" class="col-md-4 control-label">Special Activities:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectionc.specialactivities}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="specialcomments" class="col-md-4 control-label">Comment on Special Activities:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectionc.specialcomments}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="branchprojects" class="col-md-4 control-label">Branch Projects:</label>

                           <div class="col-md-6">
							<h5>
                                {{report.sectionc.branchprojects}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="projectcomments" class="col-md-4 control-label">Comment on Projects:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectionc.projectcomments}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="sectiond" class="col-md-4 control-label">Section D</label>
							<h6><em>Group Membership</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="cmf" class="col-md-4 control-label">Christian Men Fellowship:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectiond.cmf}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="cwf" class="col-md-4 control-label">Christian Women Fellowship:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectiond.cwf}}
							</h5>
                            </div>
                        </div>
						
						
						<div class="form-group">
                            <label for="cyf" class="col-md-4 control-label">Christian Youth Fellowship:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectiond.cyf}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="rc" class="col-md-4 control-label">Royal Children:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectiond.rc}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="sectione" class="col-md-4 control-label">Section E</label>
							<h6><em>Monthly G12 report</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="newcells" class="col-md-4 control-label">New Cells:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectione.newcells}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="totalcells" class="col-md-4 control-label">Total Cells</label>

                            <div class="col-md-6">
							<h5>
                                {{report.sectione.totalcells}}
							</h5>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--End of view monthly reports -->


<!--Beginning of view weekly reports -->
	<div  v-for="report in this.store">
   <div class="container" v-if="type=='weekly' && report.event">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" >
            <div class="panel panel-default form-panel">
               <div class="panel-heading custom-panel-heading"><process-date :date="report.date"></process-date></div> 
				<img class="card-img-top img-fluid form-image-position" src="http://localhost:8000/storage/images/tremlogo2.jpg" alt="Responsive image">
                <div class="panel-body">
                    <div class="form-horizontal form-position" method="POST" action="/send/report">
					
						 <div class="form-group">
						 <label for="report" class="col-md-4 control-label">Report Type:</label>
						  <div class="col-md-6">
						  <h5>
                                Weekly report
							</h5>
							</div>	
							</div>
						<div class="form-group">
                            <label for="branch" class="col-md-4 control-label">Branch:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.branch}}
							</h5>
								
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Reported by:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.name}}
							</h5>
								
                            </div>
							
                        </div>
						
						<div class="form-group">
                            <label for="date" class="col-md-4 control-label">Report Date:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.date}}
							</h5>
								
                            </div>
                        </div>
						
						
						
						<div class="form-group">
                            <label for="sectionb" class="col-md-4 control-label">Weekly Report</label>
							<h6><em>In branch register</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Event:</label>
							
                            <div class="col-md-6">
							<h5>
                                {{report.event}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Men:</label>

                           <div class="col-md-6">
							<h5>
                                {{report.men}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="total" class="col-md-4 control-label">Women:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.women}}
							</h5>
                            </div>
                        </div>
					
						
						<div class="form-group">
                            <label for="tithers" class="col-md-4 control-label">Children:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.children}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="newmembers" class="col-md-4 control-label">Total:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.total}}
							</h5>
                            </div>
                        </div>
						
						
						<div class="form-group">
                            <label for="councilmeetings" class="col-md-4 control-label">Preacher:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.preacher}}
							</h5>
                            </div>
                        </div>
						
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--End of view weekly reports -->

<!--Beginning of view G12 reports -->
	<div  v-for="report in this.store">
   <div class="container" v-if="type=='g12' && report.weeknumber">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" >
            <div class="panel panel-default form-panel">
               <div class="panel-heading custom-panel-heading"><process-date :date="report.date"></process-date></div> 
				<img class="card-img-top img-fluid form-image-position" src="http://localhost:8000/storage/images/tremlogo2.jpg" alt="Responsive image">
                <div class="panel-body">
                    <div class="form-horizontal form-position" method="POST" action="/send/report">
					
						 <div class="form-group">
						 <label for="report" class="col-md-4 control-label">Report Type:</label>
						  <div class="col-md-6">
						  <h5>
                                G12 report
							</h5>
							</div>	
							</div>
						<div class="form-group">
                            <label for="branch" class="col-md-4 control-label">Branch:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.branch}}
							</h5>
								
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Reported by:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.name}}
							</h5>
								
                            </div>
							
                        </div>
						
						<div class="form-group">
                            <label for="date" class="col-md-4 control-label">Report Date:</label>

                            <div class="col-md-6">
							<h5>
                                {{report.date}}
							</h5>
								
                            </div>
                        </div>
						
						
						
						<div class="form-group">
                            <label for="sectionb" class="col-md-4 control-label">G12 Report</label>
							<h6><em>In branch register</em></h6>
                        </div>
						
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Week Number:</label>
							
                            <div class="col-md-6">
							<h5>
                                {{report.weeknumber}}
							</h5>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Attendance:</label>

                           <div class="col-md-6">
							<h5>
                                {{report.attendance}}
							</h5>
                            </div>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--End of view G12 reports -->


<!--Beginning of Error -->
	<div>
   <div class="container" v-if="noReport==true && start==0">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" >
            <div class="panel panel-default form-panel">
               <div class="panel-body">
			    <center>
                    <b>No reports to display, Try other values.</b>
				</center>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--End of Error-->


</div>
</template>
<script>
    export default {
        mounted() {
		
		var d = new Date()
		var today = d.getFullYear()
		
		this.year = today
		
		 this.scroller()
         this.branch = this.authbranch; 
        },
		props: ['id', 'trem2', 'authbranch', 'authname'],
		
		data() {
		
		return {
		year: '',
		type: 'monthly',
		start: 0,
		end: false,
		noReport: false,
		branch: ' ',
		store: [],
		trigger: 0,
		month: ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
		
		}
		
		
		},
		
		methods: {
		
		clearStore() {
		
		this.store = []
		this.start = 0
		this.noReport = false
		
		
		},
		
		scroller() {
		
		 window.onscroll = event => {
			
			
			var d = document.documentElement;
			var offset = d.scrollTop + window.innerHeight;
			var height = d.scrollHeight - this.trigger;
			
	
			if (offset >= height) {
			
				  if(this.store.length>0) {
                  this.start = this.start + 5
				  
				  
				  this.getMoreReports();
				  
				  }
				  
				 
				  
				  
			   
		}
	}
		
		},
		
		getNewReports(){
		
		this.end= false
		
		axios.get('/get/reports/' + this.type + '/' + this.branch + '/' + this.year +  '/' + this.start)
			.then(response => {
			
			console.log(response.data)
			
			if(response.data.length==0) {
			
			this.noReport = true
			
			} else {
			
			this.noReport = false
			
			}
		
				response.data.forEach((report) => {
				
					
					this.store.push(report)
				})
				
		
		})
		
		
		},
		
		getMoreReports(){
		
		if(this.end==true) {
		return

		}
		
		axios.get('/get/reports/' + this.type + '/' + this.branch + '/' + this.year +  '/' + this.start)
			.then(response => {
				
				if (response.data.length== 0) {

					this.end= true

				}
			
				response.data.forEach((report) => {
				
				var checkReport = this.store.find ( i => {
				return i.id === report.id
				
				})
					if(!checkReport) {
					this.store.push(report)
					}
			})
				
				
		
		})
		
		
		}
		
	}
}
    
</script>