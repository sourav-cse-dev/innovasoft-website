<h3><span style="color:blue">Theme :</span></h3>
 we have use vw-corporate-lite theme for our website.

<h3>Plugins : </h3>
<h5>1. Child Theme Configurator </h5>
We have used this plugin for creating child theme of vw-corporate-lite theme.

<h5>2. Classic Editor </h5>
We use editor for page management of our theme.

<h5>3. Contact Form 7</h5>
After install this plugin we need to create a contact form then paste below code to form section :

    <div class="row">
      <div class="col-md-6">
      [text* your-name placeholder "Name"]
      </div>
      <div class="col-md-6">
       [email* your-email placeholder "Email"]
      </div>    
      <div class="col-md-12">
          [text* your-subject placeholder "Subject"] 
      </div>
      <div class="col-md-12">
          [textarea your-message placeholder "Your message..."]
      </div>
      [submit "Send Message"]  
    </div>

Then go to Appearance > Customize > Additional CSS and paste below css 

    .wpcf7-form-control-wrap input, .wpcf7-form-control-wrap textarea {
        width: 100%;
        padding: 15px !important; 
        margin-bottom: 10px; 
        border: 1px solid #ced4da; 
        border-radius: .25rem;
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    
    .wpcf7-submit {
    	background: #43A661 !important;
    	padding: 6px 30px !important;
    	color: #fff !important;
    	border-radius: 6px !important;
    }

<h5>4. GS Logo Slider Lite</h5>

We have used this logo slider for our website. upload the logos and in the logo shortcode section got to preferences and paste below code :

    .gs_logo_single--inner{
      text-align: center;
    }
    .gs_logo_single img{
      max-width: 22%;
    }
    .gs_logo_container .gs_logo_title {
      color: #363940;
      font-family: 'Inter';
      font-size: 18px;
      font-style: normal;
      font-weight: 600; 
      letter-spacing: 0.24px; 
      padding-top: 15px;
    }


<h5>5. iframe </h5>
We need to install this plugin for our website map integration.

<h5>6. WP Job Openings</h5>
We use this plugin for job post management. We can post a job post from New opning menu. We need update general settings of this plugin from Job Opennings > Settings > General. We need to update the  Job Listing Page to "Career" and timezone UTC+6 and URL slug to "career-details". Go to Job Opennings > Settings > Appearance > JOb Listing Page menu and select theme template as Jobs Archive page template and  Job Opennings > Settings > Appearance > JOb Listing Page menu select theme template as Jobs detail page template


<h3>Pages</h3>

i. About Us : we have to put below short code for about us page and select custom page template as template from page attribute section.

    [include_php_file templateName="about-us"]

ii. Contact Us : we have to put below short code for contact us page and select custom page template as template from page attribute section.

    [include_php_file templateName="contact-us"]

iii. Our Servuces 

iv. Staff Augmentation : we have to put below short code for staff augmentation page and select custom page template as template and Our services as parent and order 1 from page attribute section.

    [include_php_file templateName="staff-augmentation"]

 v. Full-Stack Development : we have to put below short code for Full-Stack Development page and select custom page template as template and Our services as parent and order 2 from page attribute section.

    [include_php_file templateName="full-stack-development"]

 vi. MVP Development : we have to put below short code for MVP Development page and select custom page template as template and Our services as parent and order 3 from page attribute section.

    [include_php_file templateName="mvp-development"]

 vii. Global Expansion : we have to put below short code for MVP Development page and select custom page template as template and Our services as parent and order 4 from page attribute section.

    [include_php_file templateName="global-expansion"]

 viii. Career :  we have to put below short code for contact us page and select custom page template as template from page attribute section.

      [include_php_file templateName="career"]

   We have to link this page with wp job opning plugin. After install wp job opening plugin we need to cofigure the settings. Then we need to add class name of wp job opneings css form design from Appearance > Customization > Additional CSS and put 
   below code before .wpcf7-form-control-wrap input this class 

     .awsm-job-form-group input, .awsm-job-form-group textarea,

   We need to configure post settings for this page from the Appearance > Customize > VW Settings > Blog Post Settings. 
   
   i. From Post settings menu we need to select "One column" for Post Sidebar Layout.
   
   ii. From Related Post settings menu we need to set OFF for show/ hide Related post.
   
   iii. From Single Post Settings menu we need set OFF for date, Author, comments, time, breadcrumb, category, tags
   
    
    
<h3>Menus</h3>

For menu and sub menu hover color we need to customize the colors from Appearance > customize > VW settings > Homepage Settings > Menus Settings. here we have set Menus Hover color and Sub menus hover color to #73BF44 .

1. Home (custom link)
 
2. Our Services (custom link (link field would be blank)) >
 
     i. Staff Augmentation
   
   ii. Full-Stack Development
   
   iii. MVP Development
   
   iv. Global Expansion
   
3. About Us
4. Carrer
