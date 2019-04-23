
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Medscape Drugs & Diseases</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  type="text/css" media="screen" href="<?php echo base_url('assets/css/ddhome.css');?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                    <div class="section" id="tools">

                            <!-- search -->
                            <div id="dd-search">
                                <form name="SearchFormRefHome" id="SearchFormRefHome" method="get" action="#">
                                    <input type="hidden" name="newSearchRefHome" value="1">
                                    <input type="textbox" onblur="refcloseil();" onfocus="if(this.placeholder == 'Search 15,000+ drugs, diseases and procedures' || 'Search') { this.placeholder = ''; } refopenil(); wmdTrack('il-cursor');" onkeyup="refil_call();" placeholder="Search" value="" id="refsearchtextinput" name="queryText" autocomplete="off">
                                    <input id="dd-search-btn" type="submit" border="0" alt="Search" value=" " name="submit">
                                </form>
                                
                                <!-- POS 1 Instant Lookup -->
                                <table id="refilfulllist">
                                    <tbody><tr valign="top">
                                        <td id="refil_combo_list"> 
                                            <p id="refil_combo_nor">
                                                Press <strong>Enter</strong> or click the <strong>Search</strong> button above to view results.
                                            </p>
                                            <ul id="refcombolist">
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody></table>
                                <!-- /POS 1 Instant Lookup -->
                            
                                <script type="text/javascript" src="//img.medscapestatic.com/medscape-core/reference/js/drug/instant_lookup-ref.js?v=20181009"></script> 
                            
                            </div>
                            <!-- /search -->
                            
                            <!-- explore -->
                            <div class="section" id="dd-explore">
                            <div class="section-header"><h2>Explore</h2></div>
                            <div class="section-content">
                                <ul><li><a class="menu--drugs" href="<?php echo base_url();?>medscape/dotc" onclick="">Drugs, OTCs, &amp; Herbals</a></li>
                                    <li><a class="menu--anatomy" href="<?php echo base_url();?>medscape/anatomy" onclick="">Anatomy</a></li>
                                </ul>
                            </div>
                            <!--Tools-->    
                            <!--/tools-->
                            </div>
                            <!-- /explore -->
                    </div>
                    <div class="section" id="featured">
                            <div class="section-header"><h2>Featured</h2></div>
                            <div class="section-content">
                                <ul>      <!-- bid:6750, rid: 16585 -->         
                                    <li>        
                             <a href="">         
                                <img src="<?php echo base_url('assets/dnd/prostate cancer.png');?>" alt="" border="0" class="featimg">        
                               </a>        

                              <a href="" class="title">Prostate Cancer</a>   
      
                             <span class="teaser">A new study has shown improved outcome in prostate cancer patients with low free testosterone treated with testosterone replacement therapy after prostatectomy.</span>        
                               <div class="byline">   April 2019 </div>  
                             </li>        
                                          <li>        
                             <a href="">         
                                <img src="<?php echo base_url('assets/dnd/acute liver fail.png');?>" alt="" border="0" class="featimg">        
                               </a>        

                              <a href="" class="title">Case: Age 64, Acute Liver Failure?</a>   
 
                                    
                             <span class="teaser">A 64-year-old man with a history of chronic obstructive pulmonary disease, alcohol abuse, and depression presents with acute hepatic failure. Can you identify the correct cause?</span>        
                               <div class="byline">   April 2019 </div>  
                                           <div class="commentcount"> <span class="livefyre-commentcount" data-lf-site-id="324818" data-lf-article-id="6011353"></span></div>
                               </li>        
                                       
                                          <!-- bid:6750, rid: 16587 -->         
                                    <li>        
                             <a href="">         
                                <img src="<?php echo base_url('assets/dnd/trichotillomania.jpg');?>" alt="" border="0" class="featimg">        
                               </a>        
                                      
                                   
                                    
                                
                              <a href="" class="title">Trichotillomania</a>   
                             
                                 
                                  
                                       
                                    
                             <span class="teaser">Owing to its moderate demonstrated efficacy and favorable adverse effect profile, current recommendations suggest N-acetylcysteine (NAC) should be considered in all cases of trichotillomania.</span>        
                               <div class="byline">   April 2019 </div>  
                             </li>        
                                          <li>        
                             <a href="">         
                                <img src="<?php echo base_url('assets/dnd/african.jpg');?>" alt="" border="0" class="featimg">        
                               </a>                                        
                              <a href="" class="title">African Trypanosomiasis</a>   
                             
                                 
                                  
                                       
                                    
                             <span class="teaser">The European Medicines Agency has adopted a positive opinion for fexinidazole as the first oral-only regimen for first- and second-stage human African trypanosomiasis due to Trypanosoma brucei gambiense.</span>        
                               <div class="byline">   April 2019 </div>  
                             </li>        
                                       
                                </ul>
                            </div>
                    </div>
                    <div class="section" id="drug-updates">
                            <div class="section-header"><h2>Recent Drug Updates</h2></div>
                            <div class="section-content">
                                <ul>    <!-- bid:6773, rid: 16598 -->   
                            <li>  
                              
                              
                             
                                
                              <a href="" class="title">erdafitinib (Balversa)</a>  
                             
                                 
                             
                                <span class="teaser">FDA grants accelerated approval to first-in-class FGFR inhibitor for urothelial carcinoma</span>  
                               <div class="byline"></div>  
                            </li>  
                            <li>  
                              
                              
                             
                                
                              <a href="" class="title">dolutegravir/lamivudine (Dovato)</a>  
                             
                                 
                             
                                <span class="teaser">FDA approves first 2-drug fixed-dose complete regimen for treatment-naïve adults with HIV-1</span>  
                               <div class="byline"></div>  
                            </li>  
                            <li>  
                              
                              
                             
                                
                              <a href="" class="title">romosozumab (Evenity)</a>  
                             
                                 
                             
                                <span class="teaser">FDA approves sclerostin binding antibody for osteoporosis treatment in postmenopausal women</span>  
                               <div class="byline"></div>  
                            </li>  
                                     
                                </ul>
                                <ul>    <!-- bid:6773, rid: 16599 -->   
                            <li>  
                              
                              
                             
                                
                              <a href="" class="title">palbociclib (Ibrance)</a>  
                             
                                 
                             
                                <span class="teaser">Indication for HR+/HER2- advanced or metastatic breast cancer expands to include men</span>  
                               <div class="byline"></div>  
                            </li>  
                            <li>  
                              
                              
                             
                                
                              <a href="" class="title">tegaserod (Zelnorm)</a>  
                             
                                 
                             
                                <span class="teaser">FDA approves reintroduction to U.S. market for women younger than 65 y with IBS-C</span>  
                               <div class="byline"></div>  
                            </li>  
                            <li>  
                              
                              
                             
                                
                              <a href="" class="title">cladribine (Mavenclad)</a>  
                             
                                 
                             
                                <span class="teaser">FDA approves purine antimetabolite for relapsing MS</span>  
                               <div class="byline"></div>  
                            </li>  
                                     
                                </ul>
                            </div>
                            </div>
            </div>
            <div class="col-md-4">
                    <div class="section" id="slideshow-collections">
                            <div class="section-header"><h3>Slideshow Collections</h3></div>
                            <div class="section-content">
                            <ul>        
                                <li>        
                                <a href="">         
                                    <img src="<?php echo base_url('assets/dnd/skin infect.png');?>" alt="" border="0" class="featimg">        
                                </a>      
                                <a href="" class="title">Bacterial Skin Infections: Can You Make the Diagnosis?</a>      
                                <span class="teaser">Bacterial skin infections are very common, with presentations ranging from subtle to alarming. Can you correctly identify these lesions? Test your diagnostic acumen with our slideshow.</span>        
                                <div class="byline">   April 2019 </div>  
                                </li>        
                                <li>        
                                <a href="">         
                                <img src="<?php echo base_url('assets/dnd/trauma in pregnancy.jpg');?>" alt="" border="0" class="featimg">        
                                </a>        
                                <a href="" class="title">Don't Bump the Bump: Trauma in Pregnancy</a>         
                                <span class="teaser">Trauma is the leading nonobstetric cause of maternal death--and it occurs in an estimated 1 in 12 pregnancies. Learn about predisposing risk factors for, and causes and patterns of, injury in pregnant women, as well as how pregnancy changes affect their management after trauma.</span>        
                                <div class="byline">   April 2019 </div>  
                                </li>        
                                <li>        
                                <a href="">         
                                <img src="<?php echo base_url('assets/dnd/kidneycancer.jpg');?>" alt="" border="0" class="featimg">        
                                </a>        
                                <a href="" class="title">Recognizing Renal Cell Carcinoma</a>    
                                <span class="teaser">Although many kidney masses are benign, with renal cell carcinoma (RCC) accounting for approximately just 3.8% of all US cancer diagnoses made annually, the possibility of RCC must not be overlooked. Learn more about evaluating these lesions.</span>        
                                <div class="byline">   March 2019 </div>  
                                </li>        
                                <li>        
                                <a href="">         
                                <img src="<?php echo base_url('assets/dnd/rheumatoid.jpg');?>" alt="" border="0" class="featimg">        
                                </a>        
                                <a href="" class="title">Rheumatoid Arthritis: In and Out of the Joint</a>       
                                <span class="teaser">Arthritis exists in multiple forms, including rheumatoid arthritis (RA) and osteoarthritis. Do you know the distinguishing features of RA, and are you familiar with the disease's potential extra-articular manifestations?</span>        
                               <div class="byline">   April 2019 </div>  
                                </li>                  
                                </ul>
                                </div>
                                </div>
            </div>
        </div>
    </div>
    <div class="column column-full">

        <!-- academic partners + advisory board  -->
        <!-- Academic Partners -->
        <div class="section" id="partners">
        <div class="section-header"><h4>Academic Partners</h4></div>
        <div class="section-content">
            <ul><li><a href="" onclick="wmdTrack('ptnr_1')"><img src="<?php echo base_url('assets/dnd/einstein.jpg');?>" border="0" alt="" class="featimg"></a>
                    <a href="" class="title" onclick="wmdTrack('ptnr_1')">Albert Einstein Medical Center</a></li>
                <li><a href="" onclick="wmdTrack('ptnr_2')"><img src="<?php echo base_url('assets/dnd/BCM.jpg');?>" border="0" alt="" class="featimg"></a>
                    <a href="" class="title" onclick="wmdTrack('ptnr_2')">Baylor College of Medicine</a></li>
                <li><a href="" onclick="wmdTrack('ptnr_3')"><img src="<?php echo base_url('assets/dnd/drexel.jpg');?>" border="0" alt="" class="featimg"></a>
                    <a href="" class="title" onclick="wmdTrack('ptnr_3')">Drexel University College of Medicine</a></li>
                <li><a href="" onclick="wmdTrack('ptnr_5')"><img src="<?php echo base_url('assets/dnd/roosevelt.jpg');?>" border="0" alt="" class="featimg"></a>
                    <a href="" class="title" onclick="wmdTrack('ptnr_5')">St. Luke's-Roosevelt Hospital Center</a></li>
                <li><a href="" onclick="wmdTrack('ptnr_6')"><img src="<?php echo base_url('assets/dnd/kettering.jpg');?>" border="0" alt="" class="featimg"></a>
                    <a href="" class="title" onclick="wmdTrack('ptnr_6')">Memorial<br> Sloan Kettering</a></li>
                <li><a href="" onclick="wmdTrack('ptnr_7')"><img src="<?php echo base_url('assets/dnd/stlu.jpg');?>" border="0" alt="" class="featimg"></a>
                    <a href="" class="title" onclick="wmdTrack('ptnr_7')">Saint Louis University School of Medicine</a></li>
                <li><a href="" onclick="wmdTrack('ptnr_8')"><img src="<?php echo base_url('assets/dnd/ucsd.jpg');?>" border="0" alt="" class="featimg"></a>
                    <a href="" class="title" onclick="wmdTrack('ptnr_8')">UCSD School of Medicine</a><a href="" class="title"></a></li>
                <li><a href=""><img src="<?php echo base_url('assets/dnd/ucsf.jpg');?>" border="0" alt="" class="featimg"></a>
                    <a href="" class="title">UCSF School of Medicine</a></li>
                <li><a href=""><img src="<?php echo base_url('assets/dnd/yale.jpg');?>" border="0" alt="" class="featimg"></a>
                    <a href="" class="title">Yale School of Medicine</a></li>
            </ul>
        </div>
        </div>
        <!-- /Academic Partners -->
        
        <!-- advisory board -->
        <div class="section" id="advisory-board">
        <div class="section-header"><h4>Advisory Board</h4></div>
        <div class="section-content">
            <ul><li><span class="name"><a href="">David Chelmow, MD</a></span></li>
                <li><span class="name"><a href="">John Geibel, MD, DSc, MA</a></span></li>
                <li><span class="name"><a href="">Lars J Grimm, MD, MHS</a></span></li>
                <li><span class="name"><a href="">James Lee, MD</a></span></li>
            </ul>
            <ul>
                <li><span class="name"><a href="">David J Maron, MD, FACC, FAHA</a></span></li>
                <li><span class="name"><a href="">Arlen D Meyers, MD, MBA</a></span></li>
                <li><span class="name"><a href="">Kathy D Miller, MD</a></span></li>
                <li><span class="name"><a href="">Thomas M Wheeler, MD</a></span></li>
            </ul>
        </div>
        </div>
        <!-- /advisory board -->
        
        <!-- /academic partners + advisory board  -->
        
        <!-- contributor login + about  -->
        <!-- contributor login + about -->
        <div class="section" id="bottom-links">
        <div class="section-content">
            <a class="about-medscape" href="">About Medscape Drugs &amp; Diseases</a> <span class="separator">|</span>
            <span class="contributorLogin"><a href="" target="_blank">Contributor Login</a></span> 
        
        </div>
        </div>
        <!-- /contributor login + about -->
        <!-- /contributor login + about -->
    </div>
</body>
</html>