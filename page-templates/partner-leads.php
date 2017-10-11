<?php
/*
Template Name: Partner Leads
*/
get_header(); ?>

<script language="javascript">
	
// Countries
var country_arr = new Array("Canada", "United States");

// States
var s_a = new Array();
s_a[0] = "";
s_a[1] = "Alberta|British Columbia|Manitoba|New Brunswick|Newfoundland|Northwest Territories|Nova Scotia|Nunavut|Ontario|Prince Edward Island|Quebec|Saskatchewan|Yukon Territory";
s_a[2] = "Alabama|Alaska|Arizona|Arkansas|California|Colorado|Connecticut|Delaware|District of Columbia|Florida|Georgia|Hawaii|Idaho|Illinois|Indiana|Iowa|Kansas|Kentucky|Louisiana|Maine|Maryland|Massachusetts|Michigan|Minnesota|Mississippi|Missouri|Montana|Nebraska|Nevada|New Hampshire|New Jersey|New Mexico|New York|North Carolina|North Dakota|Ohio|Oklahoma|Oregon|Pennsylvania|Rhode Island|South Carolina|South Dakota|Tennessee|Texas|Utah|Vermont|Virginia|Washington|West Virginia|Wisconsin|Wyoming";

function populateStates(countryElementId, stateElementId) {

    var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;

    var stateElement = document.getElementById(stateElementId);

    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option('Select State', '');
    stateElement.selectedIndex = 0;

    var state_arr = s_a[selectedCountryIndex].split("|");

    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }
}

function populateCountries(countryElementId, stateElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('Select Country', '-1');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (stateElementId) {
        countryElement.onchange = function () {
            populateStates(countryElementId, stateElementId);
        };
    }
}

</script>

<div class="contain-wrapper partner-lead-banner wrap push">
	<div class="partner-lead-banner-wrapper">
		<h1>Enter a Lead</h1>
	</div><!-- partner-lead-banner-wrapper -->
</div><!-- partner-lead-banner -->

<div class="container partner-lead-body wrap push">
	<div class="row">
		
		<div class="partner-lead-stuff">
			<h3>Lead Information</h3>
			<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
				<input type=hidden name="oid" value="00D70000000K6QD">
				<input type=hidden name="retURL" value="http://rizepoint.com/thank-you">
				<label for="first_name">First Name</label><input class="partner-lead-input form-control" id="first_name" maxlength="40" name="first_name" size="20" type="text" /><br>
				<label for="last_name">Last Name</label><input class="partner-lead-input form-control" id="last_name" maxlength="80" name="last_name" size="20" type="text" /><br>
				<label for="title">Title</label><input class="partner-lead-input form-control" id="title" maxlength="40" name="title" size="20" type="text" /><br>
				<label for="email">Email</label><input class="partner-lead-input form-control" id="email" maxlength="80" name="email" size="20" type="text" /><br>
				<label for="phone">Phone</label><input class="partner-lead-input form-control" id="phone" maxlength="40" name="phone" size="20" type="text" /><br>
				<label for="company">Company</label><input class="partner-lead-input form-control" id="company" maxlength="40" name="company" size="20" type="text" /><br>
				
				<label for="country">Country</label>
				<select class="partner-lead-input form-control" id="country" name="country"></select>
				
				<label for="state">State/Province</label>
				<select class="partner-lead-input form-control" id="state" name="state"></select><br>
				
				<label for="lead_source">Lead Source</label>
				<select class="partner-lead-input form-control" id="lead_source" name="lead_source">
					<option value="">-Select Partner-</option>
					<option value="Partner: Elevate">Elevate</option>
					<option value="Partner: InMoment">InMoment</option>
					<option value="Partner: Powers">Powers &amp; Associates</option>
					<option value="Partner: Cooper-Atkins">Cooper-Atkins</option>
					<option value="Partner: Infotrend">Infotrend</option>
					<option value="Partner: Infotrend">Griswold &amp; Associates</option>
					<option value="Other">Other</option>
				</select><br>
				Your Name (Partner Contact)<input class="partner-lead-input form-control" id="00N70000003zzHR" maxlength="50" name="00N70000003zzHR" size="20" type="text" /><br>
				<!-- ENGAGED DATE HIDDEN -->
				<span class="dateInput dateOnlyInput"><input  id="00N70000003zgX1" name="00N70000003zgX1" size="12" type="hidden" value="<?php echo date(n."/".j."/".Y); ?>"/></span><br>
				
				<input id="00N70000003jCad" name="00N70000003jCad" type="hidden" value=""><br>
				
				<script language="javascript">
					// country state dynamic populate
					populateCountries("country", "state");				
					
					// assign to a sales rep
					document.getElementById('state').onclick = function(){
						var country = document.getElementById('country').value;
						var state = document.getElementById('state').value;

						if(country == 'Canada' || state == "Maine" || state == "Washington" || state == "Idaho" || state == "Oregon" || state == "Montana" || state == "Wyoming" || state == "North Dakota" || state == "South Dakota" || state == "Nebraska" || state == "Minnesota" || state == "Iowa" || state == "Missouri" || state == "Wisconsin" || state == "Illinois" || state == "Michigan" || state == "Indiana" || state == "Kentucky" || state == "Tennessee" || state == "Ohio" || state == "West Virginia" || state == "Virginia" || state == "North Carolina" || state == "Pennsylvania" || state == "New York" || state == "New Hampshire" || state == "Vermont" || state == "Massachusetts" || state == "Rhode Island" || state == "Connecticut" || state == "New Jersey" || state == "Delaware" || state == "Maryland" || state == "Alaska" ){

							// assign to dude
							var salesAssignment = "Darin Mercer"; 											
							document.getElementById('00N70000003jCad').value = salesAssignment;

						}else{
							
							var salesAssignment = "Aaron McAffee"; 					
							document.getElementById('00N70000003jCad').value = salesAssignment;

						}
					}
						
				</script>
				
				<input type="submit" name="submit" class="partner-lead-btn">
			</form>
		</div><!-- partner-lead-right -->
	</div><!-- row -->
</div><!-- partner-lead-body -->
<?php get_footer(); ?>
