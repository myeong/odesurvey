<?php include __DIR__.'/'.'tp_pt_header.php'; ?>

<style>
  .controlsec {
    border:0px solid #eee; 
    margin: 12px 0px 0px 0px; 
  }

  .myeditable {
    height: 200px;
    width: 150%;
  }

  .myeditableshow {
  }

  h3 {
    border-bottom: 1px dotted #ddd;
    margin: 24px 0px 16px 0px;
  }

{
    width: 85%!important;
}

body {
  font-size: 11pt;
}

</style>

<!-- Main Content Section -->
<div class="container lg-font col-md-12" style="border:1px solid black;">

 <form id="survey_form" class="form-horizontal" style="border:1px dotted black;" action="/survey/opendata/2/<?php echo $content['surveyId']; ?>" method="post">

    <div class="col-md-12" role="Intro" id="role-intro">
      <br />
      <div style="text-align:center;font-size:1.1em;">
        Thank you for participating in the Open Data Impact Map, the first centralized, searchable database of open data use cases from around the world. Your contribution makes it possible to better understand the value of open data and encourage its use globally. Information collected will be displayed on the Map [LINK] and will be made available as open data.
      </div>
      <br />
    </div>
     
    <div class="col-md-12" role="eligibility" id="role-eligibility">
      <div class="row col-md-12">
        <h3>Eligibility</h3>
      </div>
      <div>
        The Open Data Impact Map includes organizations that:<br /><br />
          <ul>
              <li>are companies, non-profits, or developer groups; and</li>
              <li>use <i>open government data</i> to develop products and services, improve operations, inform strategy and/or conduct research.</li>
            </ul>
        <br />
        We define <i>open government data</i> as publicly available data that is produced or commissioned by governments 
        and that can be accessed and reused by anyone, free of charge. 
      </div>
    </div>

<br />

    <div class="col-md-12" role="orgInfo"  id="role-orgInfo">
      <div class="row col-md-12">
          <h3>Organizational Information</h3>
      </div>

      <!-- Name of organization -->
      <div class="row col-md-12">
        <div class="form-group col-md-12">
          <div class="form-group col-md-8">
            <label for="org_name">Name of the organization <small class="required">*</small></label>
            <input type="text" class="form-control" id="org_name" name="org_name" placeholder="" required minlength="2">
        </div>
        </div>
      </div>

      <!-- Type of organization -->
      <div class="form-group col-md-12" id="org_type">
          <label class="control-label">Type of organization <small class="required">*</small></label>
        <div class="col-md-8">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default">
                <input type="radio" name="org_type" id="For-profit" value="For-profit" /> For-profit
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_type" id="Nonprofit" value="Nonprofit" /> Nonprofit
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_type" id="Developer group" value="Developer group" /> Developer group
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_type" id="Other" value="Other" /> Other
            </label>
          </div>
        </div>
      </div>

      <!-- Website URL -->
      <div class="form-group col-md-12">
        <label for="org_url">Website URL</label>
        <div class="row">      
            <div class="col-md-6">
              <input type="url" class="form-control" id="org_url" name="org_url" placeholder="http://" value="http://">
            </div>
            <div class="col-md-4">
              <input type="checkbox" name="no_org_url" id="no_org_url" value="True"> No URL
            </div>
        </div>
      </div>

      <!-- Description of organization -->
      <div class="form-group col-md-12">
        <div class="form-group col-md-8">
          <label for="org_description">Description of organization <i>(400 characters or less)</i> <small class="required">*</small></label>
          <textarea type="text" class="form-control " id="org_description" name="org_description" style="height:160px; min-height:160px;  max-height:160px;" required></textarea>
        </div>
      </div>

      <!-- Location -->  
      <div class="form-group col-md-12">
        <div class="form-group col-md-7 details">

          <label for="org_hq_city_all">Location <i>(city, region/state, country)</i> <small class="required">*</small></label>
          <input type="text" class="form-control" id="org_hq_city_all" name="org_hq_city_all" required>

          <!--label for="org_hq_city">City</label -->
          <input type="hidden" class="form-control" id="org_hq_city" name="org_hq_city" required data-geo="locality">

          <!--label for="org_hq_st_prov">State/Province</label -->
          <input type="hidden" class="form-control" id="org_hq_st_prov" name="org_hq_st_prov" required data-geo="administrative_area_level_1">

          <!--label for="org_hq_country">Country</label -->
          <input type="hidden" class="form-control" id="org_hq_country" name="org_hq_country" required data-geo="country_short">

          <!--label for="latitude">lat</label -->
          <input type="hidden" class="form-control" id="latitude" name="latitude" required data-geo="lat">
          <!--label for="longitude">lng</label -->
          <input type="hidden" class="form-control" id="`" name="longitude" required data-geo="lng">
        </div>
      </div>
  
      <!-- Industry/category of organization -->
      <div class="form-group col-md-12">
        <div class="form-group col-md-7">
        <label for="industry_id">Industry/category of the organization <i>(select 1)</i> <small class="required">*</small></label>
          <select class="basic-single-industry required" name="industry_id" id="industry_id" style="width:336px;" >
            <option value="">Select</option>
            <option value="bus">Business &amp; legal services</option>
            <option value="cul">Culture/Leisure</option>
            <option value="dat">Data/Technology</option>
            <option value="edu">Education</option>
            <option value="ngy">Energy</option>
            <option value="env">Environment &amp; weather</option>
            <option value="fin">Finance &amp; investment</option>
            <option value="agr">Food &amp; agriculture</option>
            <option value="geo">Geospatial/Mapping</option>
            <option value="gov">Governance</option>
            <option value="hlt">Healthcare</option>
            <option value="est">Housing/Real estate</option>
            <option value="hum">Human rights</option>
            <option value="ins">Insurance</option>
            <option value="lif">Lifestyle &amp; consumer</option>
            <option value="med">Media &amp; communications</option>
            <option value="man">Mining/Manufacturing</option>
            <option value="rsh">Research &amp; consulting</option>
            <option value="sci">Scientific research</option>
            <option value="tel">Telecommunication/ISPs</option>
            <option value="trm">Tourism</option>
            <option value="trd">Trade &amp; commodities</option>
            <option value="trn">Transportation</option>
            <option value="otr">Other</option>
          </select>
        </div>
      </div>

      <!-- Founding year -->    
      <div class="form-group col-md-12">
        <div class="form-group col-md-7">
          <label for="org_year_founded">Founding year <small class="required">*</small></label>
          <input type="text" class="form-control" id="org_year_founded" name="org_year_founded" placeholder="" required>
        </div>
      </div>

      <!-- Size -->
      <div class="form-group col-md-12">
        <label class="control-label">Size <small class="required">*</small></label>
        <div class="col-md-12">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default">
                <input type="radio" name="org_size_id" value="1 - 10" /> 1-10 employees
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_size_id" value="11 - 50" /> 11-50 employees
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_size_id" value="51 - 200" /> 51-200 employees
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_size_id" value="201 - 1000" /> 201-1000 employees
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_size_id" value="1000+" /> 1000+ employees
            </label>
          </div>
        </div>
      </div>

      <!-- What is the greatest type of impact your organization has? -->
      <div class="form-group col-md-12" id="org_greatest_impact">
          <label class="control-label">What is the greatest type of impact your organization has? <small class="required">*</small></label>
        <div class="col-xs-9">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default">
                <input type="radio" name="org_greatest_impact" id="Economic" value="Economic" /> Economic
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_greatest_impact" id="Environmental" value="Environmental" /> Environmental
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_greatest_impact" id="Governance" value="Governance" /> Governance
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_greatest_impact" id="Social" value="Social" /> Social
            </label>
            <label class="btn btn-default">
                <input type="radio" name="org_greatest_impact" id="Other" value="Other" /> Other
            </label>
          </div>
        </div>
      </div>
    </div><!--/OrgInfo-->

<br />

    <div class="col-md-12" role="dataUse" id="role-dataUse">
      <div class="row col-md-12" role="dataTypes">
        <h3>Use of open data</h3>
      </div>
      
      <!-- Types of open data -->
      <div class="form-group col-md-12">
        <label class="control-label">Types of open data used (e.g. Housing, Finance, Public Safety, ...) <small class="required">*</small></label>
        <div class="col-md-12">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default">
                <input type="radio" name="data_type_count" value="1" /> 1 type
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_type_count" value="2 - 5" /> 2-5 types
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_type_count" value="6 - 10" /> 6-10 types
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_type_count" value="11 - 20" /> 11-20 types
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_type_count" value="20+" /> 20+ types
            </label>
          </div>
        </div>
      </div>

      <!-- Sources of open data -->
      <div class="form-group col-md-12">
        <label class="control-label">Countries from which of open data sourced <small class="required">*</small></label>
        <div class="col-md-12">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default">
                <input type="radio" name="data_country_count" value="1" /> 1 country
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_country_count" value="2 - 5" /> 2-5 countries
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_country_count" value="6 - 10" /> 6-10 countries
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_country_count" value="11 - 20" /> 11-20 countries
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_country_count" value="21 - 50" /> 21-50 countries
            </label>
            <label class="btn btn-default">
                <input type="radio" name="data_country_count" value="50+" /> 50+ countries
            </label>
          </div>
        </div>
      </div>



      <br />
      <div class="row col-md-12" role="dataPurposes">
        <label>
          How does your organization use open data? <small class="required">*</small>
        </label>

        <div class="form-group col-md-12">
          <div class="form-group col-md-7">

            <div class="checkbox">
              <label>
                <input type="checkbox" name="use_prod_srvc" id="use_prod_srvc" value="True">
                develop new products or services : 
              </label>
            </div>
            <div class="od-purpose">
              Please provide us with details: <input type="text" class="form-control" id="use_prod_srvc_desc" name="use_prod_srvc_desc">
            </div>          


            <div class="checkbox">
              <label>
                <input type="checkbox" name="use_org_opt" id="use_org_opt" value="True">
                organizational optimization :
              </label>
            </div>
            <div class="od-purpose">
              Please provide us with details: <input type="text" class="form-control" id="use_org_opt_desc" name="use_org_opt_desc">
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="use_research" id="use_research" value="True">
                research :
              </label>
            </div>
            <div class="od-purpose">
              Please provide us with details: <input type="text" class="form-control" id="use_research_desc" name="use_research_desc">
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="use_other" id="use_other" value="True">
                other : 
              </label>
            </div>
            <div class="od-purpose">
              Please provide us with details: <input type="text" class="form-control" id="use_other_desc" name="use_other_desc">
            </div>
      
          </div>
        </div>
      </div><!--/???? closes data purpose this should close datause tag - something must be wrong with data grid-->

      <div class="form-group col-md-12">
        <div class="form-group col-md-8">
          <label for="org_greatest_impact">Additional information <i>(400 characters or less)</i>  </label>
            <textarea type="text" class="form-control" id="org_additional" name="org_additional" style="height:160px; min-height:160px;  max-height:160px;"></textarea>
        </div>
      </div>


    </div>  <!-- /closes data use  -->
<br />
  
    <div class="col-md-12" role="Contact" id="role-contact">
      <div class="row col-md-12">
          <h3>Contact Information</h3>
          (This information will not be made public)
      </div>

      <div class="form-group col-md-12">
        <div class="col-md-7">
          <div for="survey_contact_first">first name <small class="required">*</small></div>
          <input type="text" class="form-control" id="survey_contact_first" name="survey_contact_first" required>

          <div for="survey_contact_last">last name <small class="required">*</small></div>
          <input type="text" class="form-control" id="survey_contact_last" name="survey_contact_last" required>

          <div for="survey_contact_title">title <small class="required">*</small></div>
          <input type="text" class="form-control" id="survey_contact_title" name="survey_contact_title" required>

          <div for="survey_contact_email">email <small class="required">*</small></div>
          <input type="email" class="form-control" id="survey_contact_email" name="survey_contact_email" required>

          <div for="survey_contact_email">phone (optional)</div>
          <input type="text" class="form-control" id="survey_contact_phone" name="survey_contact_phone">

          <input type="hidden" class="form-control" id="org_profile_year" name="org_profile_year" value="2015">
          <input type="hidden" class="form-control" id="org_profile_status" name="org_profile_status" value="submitted">
          <input type="hidden" class="form-control" id="org_profile_src" name="org_profile_src" value="survey">
        </div>
      </div>
    </div><!-- /closes role contact -->
      
    <div class="row col-md-7"><br />
      <button class="btn btn-primary col-md-3" id="btnSubmit" type="submit">SUBMIT</button>
    </div>


</form>

</div> 
<!-- I think I am missing a closing </div> gut things are working.
<!--/end container - where is the tag?-->

<?php include __DIR__.'/'.'tp_pt_footer.php'; ?>

