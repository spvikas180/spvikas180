<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Website Development Requirements Gathering form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="style.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <div id="wizard" class="wizard">
                <div class="wizard__content">
                    <header class="wizard__header">
                        <div class="wizard__header-overlay"></div>
                        <div class="wizard__header-content">
                            <h1 class="wizard__title">Questionnaire for WD</h1>
                            <p class="wizard__subheading">You are steps away from getting the best website</p>
                        </div>
                        <div class="wizard__steps">
                            <nav class="steps">
                                <div class="step">
                                    <div class="step__content">
                                        <p class="step__number"><i class="fa fa-github-alt"></i></p>
                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                        </svg>
                                        <div class="lines">
                                            <div class="line -start"></div>
                                            <div class="line-background"></div>
                                            <div class="line -progress"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="step">
                                    <div class="step__content">
                                        <p class="step__number"><i class="fa fa-book"></i></p>
                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                        </svg>
                                        <div class="lines">
                                            <div class="line-background"></div>
                                            <div class="line-progress"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="step">
                                    <div class="step__content">
                                        <p class="step__number"><i class="fa fa-group"></i></p>
                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                        </svg>
                                        <div class="lines">
                                            <div class="line-background"></div>
                                            <div class="line-progress"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step">
                                    <div class="step__content">
                                        <p class="step__number"><i class="fa fa-group"></i></p>
                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                        </svg>
                                        <div class="lines">
                                            <div class="line-background"></div>
                                            <div class="line-progress"> </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </header> 
                    <form id="contact" action="all-mail.php" method="post">
                        <div class="panels">
                            <div class="panel">
                                <h2 class="text-center">About You Business</h2>
                                <h3 class="text-center">Fill out your requirements below!</h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>Who is your target market ?</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="target_market_profession">Profession your target market</label>
                                            <input type="text" name="target_market_profession" id="target_market_profession" placeholder="Profession your target market"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="target_market_age">Age</label>
                                            <select name="target_market_age" id="target_market_age">
                                                <option value="0-10 Year">0-10 Year</option>
                                                <option value="10-20 Year">10-20 Year</option>
                                                <option value="20-30 Year">20-30 Year</option>
                                                <option value="30-40 Year">30-40 Year</option>
                                                <option value="40-50 Year">40-50 Year</option>
                                                <option value="50-60 Year">50-60 Year</option>
                                                <option value="Above 60 Year">Above 60 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="target_market_income">Income ( US Dollars )</label>
                                            <select name="target_market_income" id="target_market_income">
                                                <option value="0-10 Thousands">0-10 Thousands</option>
                                                <option value="10-20 Thousands">10-20 Thousands</option>
                                                <option value="20-30 Thousands">20-30 Thousands</option>
                                                <option value="30-40 Thousands">30-40 Thousands</option>
                                                <option value="40-50 Thousands">40-50 Thousands</option>
                                                <option value="50-60 Thousands">50-60 Thousands</option>
                                                <option value="60-70 Thousands">60-70 Thousands</option>
                                                <option value="70-80 Thousands">70-80 Thousands</option>
                                                <option value="80-90 Thousands">80-90 Thousands</option>
                                                <option value="Above 90 Thousands">Above 90 Thousands</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="target_market_gender">Gender</label>
                                            <select name="target_market_gender" id="target_market_gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>Where is your target market located ?</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="target_market_state">State</label>
                                            <select name="target_market_state" id="target_market_state"><option value="Alabama"> Alabama </option><option value="Alaska"> Alaska </option><option value="Arizona"> Arizona </option><option value="Arkansas"> Arkansas </option><option value="Byram"> Byram </option><option value="California"> California </option><option value="Cokato"> Cokato </option><option value="Colorado"> Colorado </option><option value="Connecticut"> Connecticut </option><option value="Delaware"> Delaware </option><option value="District of Columbia"> District of Columbia </option><option value="Florida"> Florida </option><option value="Georgia"> Georgia </option><option value="Hawaii"> Hawaii </option><option value="Idaho"> Idaho </option><option value="Illinois"> Illinois </option><option value="Indiana"> Indiana </option><option value="Iowa"> Iowa </option><option value="Kansas"> Kansas </option><option value="Kentucky"> Kentucky </option><option value="Louisiana"> Louisiana </option><option value="Lowa"> Lowa </option><option value="Maine"> Maine </option><option value="Maryland"> Maryland </option><option value="Massachusetts"> Massachusetts </option><option value="Medfield"> Medfield </option><option value="Michigan"> Michigan </option><option value="Minnesota"> Minnesota </option><option value="Mississippi"> Mississippi </option><option value="Missouri"> Missouri </option><option value="Montana"> Montana </option><option value="Nebraska"> Nebraska </option><option value="Nevada"> Nevada </option><option value="New Hampshire"> New Hampshire </option><option value="New Jersey"> New Jersey </option><option value="New Jersy"> New Jersy </option><option value="New Mexico"> New Mexico </option><option value="New York"> New York </option><option value="North Carolina"> North Carolina </option><option value="North Dakota"> North Dakota </option><option value="Ohio"> Ohio </option><option value="Oklahoma"> Oklahoma </option><option value="Ontario"> Ontario </option><option value="Oregon"> Oregon </option><option value="Pennsylvania"> Pennsylvania </option><option value="Ramey"> Ramey </option><option value="Rhode Island"> Rhode Island </option><option value="South Carolina"> South Carolina </option><option value="South Dakota"> South Dakota </option><option value="Sublimity"> Sublimity </option><option value="Tennessee"> Tennessee </option><option value="Texas"> Texas </option><option value="Trimble"> Trimble </option><option value="Utah"> Utah </option><option value="Vermont"> Vermont </option><option value="Virginia"> Virginia </option><option value="Washington"> Washington </option><option value="West Virginia"> West Virginia </option><option value="Wisconsin"> Wisconsin </option><option value="Wyoming"> Wyoming </option></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="target_market_city">City</label>
                                            <input name="target_market_city" id="target_market_city" type="text" placeholder="City"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <h4>What are you Products / Services and Pricing ?</h4>
                                            <p class="infor">This should include the details of services/products that you company offers</p>
                                            <textarea name="services" id="services" placeholder="write some text here about it"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>Profile your Current Clients ?</h4>
                                        <p class="infor">How do you get your current customers such as  through Walk-Ins, Referrals or Telephonic enquiries?</p>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="current_clients" id="current_clients" placeholder="write some text here about it"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>Who are your prominent competitors ?</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="competitors_name_1">Name of competitors</label>
                                            <input name="competitors_name_1" id="competitors_name_1" type="text" placeholder="Name"/>
                                            <input name="competitors_name_2" id="competitors_name_2" type="text" placeholder="Name"/>
                                            <input name="competitors_name_3" id="competitors_name_3" type="text" placeholder="Name"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="competitors_website_1">Website of competitors</label>
                                            <input name="competitors_website_1" id="competitors_website_1" type="text" placeholder="www.website.com"/>
                                            <input name="competitors_website_2" id="competitors_website_2" type="text" placeholder="www.website.com"/>
                                            <input name="competitors_website_3" id="competitors_website_3" type="text" placeholder="www.website.com"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>Which Online Portals is your Business registered at present ?</h4>
                                        <p class="infor">Business promotional portals such as BBB, Yelp etc.</p>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="online_portals" id="online_portals" placeholder="write some text here about it"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <h2 class="text-center">About Your New Website.</h2>
                                <h3 class="text-center">We have cool skills, but none is better then php</h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>What are the factors involved in deducing your website ?</h4>
                                        <p class="infor">Factors such as Budget, Positioning in relation to competitors? On par with another site?</p>
                                        <div class="form-group">
                                            <textarea name="deducing" id="deducing" placeholder="write some text about your target market"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <h4>Is there any special functionality you would like to include in your website ?</h4>
                                        <p class="infor">Some particular feature you would like to add to your website? For your customer/ visitors or for yourself</p>
                                        <div class="form-group">
                                            <textarea name="special_functionality" id="special_functionality" placeholder="write some text about your target market"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <h4>Do you currently have a Domain / Web Page representing your business? If yes, please state the link ?</h4>
                                        <p class="infor">If you have any domain name like www.example.com</p>
                                        <div class="form-group">
                                            <textarea name="currently_domain" id="currently_domain" placeholder="www.example.com"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <h4>Do you own a Hosting / ISP at the moment?</h4>
                                            <p class="infor">Hosting like godaddy, host gator, name cheap and a2hosting</p>
                                            <select name="doamin" id="domain">
                                                <option value="Godaddy">Godaddy</option>
                                                <option value="HostGator">HostGator</option>
                                                <option value="A2hosting">A2hosting</option>
                                                <option value="Namecheap">Namecheap</option>
                                                <option value="Hostinger">Hostinger</option>
                                                <option value="HostGator">HostGator</option>
                                                <option value="Name.com">Name.com</option>
                                                <option value="Squarespace">Squarespace</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <textarea name="domain_other" id="domain_other" placeholder="write some text here about it"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <h4>Please provide a link to a site which would act as the most significant inspiration?</h4>
                                        <p class="infor">Best website you can suggest in similar business such as yours</p>
                                        <div class="form-group">
                                            <textarea name="significant_inspiration" placeholder="write some text here about it"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <h4>How soon do you expect the Website to be live ?</h4>
                                        <p class="infor">Number of Days/Weeks ( We usually take 7 to 10 working days )</p>
                                        <div class="form-group">
                                            <textarea name="live_days" placeholder="write some text here about it"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel" style=" width: 100%">
                                <h2 class="text-center">Structure of New Website.</h2>
                                <h3 class="text-center">You can choose more than one option</h3>
                                <div class="boxes">
                                    <input name="website_str[]" type="checkbox" id="box-1">
                                    <label for="box-1">Home</label>
                                    <input name="website_str[]" type="checkbox" id="box-2" checked>
                                    <label for="box-2">About </label>
                                    <input name="website_str[]" type="checkbox" id="box-3">
                                    <label for="box-3">Services</label>
                                    <input name="website_str[]" type="checkbox" id="box-4">
                                    <label for="box-4">Industries</label>
                                    <input name="website_str[]" type="checkbox" id="box-5">
                                    <label for="box-5">News/Blog</label>
                                    <input name="website_str[]" type="checkbox" id="box-6">
                                    <label for="box-6">Reference</label>
                                    <input name="website_str[]" type="checkbox" id="box-7">
                                    <label for="box-7">FAQ's</label>
                                    <input name="website_str[]" type="checkbox" id="box-8">
                                    <label for="box-8">Clients/Partner</label>
                                    <input name="website_str[]" type="checkbox" id="box-9">
                                    <label for="box-9">Contact Form</label>
                                    <input name="website_str[]" type="checkbox" id="box-10">
                                    <label for="box-10">Terms of Service</label>
                                    <input name="website_str[]" type="checkbox" id="box-11">
                                    <label for="box-11">Privacy Policy</label>
                                    <input name="website_str[]" type="checkbox" id="box-12">
                                    <label for="box-12">Other</label>

                                </div>
                            </div>
                            <div class="panel optn">
                                <h2 class="text-center">Content of New Website</h2>
                                <h3 class="text-center">Fill out your requirements below!</h3>
                                <h4>Are you able to provide all of the textual content that you wish to have within the website?</h4>
                                <input type="checkbox" name="newWeb[]" id="box-13">
                                <label for="box-13">Yes, I will provide all the text in the form it would be used online.</label>
                                <input type="checkbox" name="newWeb[]" id="box-14">
                                <label for="box-14">I can provide a general idea and would like to have Zonefirewall do the rest.</label>
                                <input type="checkbox" name="newWeb[]" id="box-15">
                                <label for="box-15">I would like for Zonefirewall to create all the textual content.</label>
                                <input type="checkbox" name="newWeb[]" id="box-16">
                                <label for="box-16">Other.</label>

                                <h4>What standard of imagery/photography would you wish to have within the website?</h4>
                                <input type="checkbox" name="imagery[]" id="box-17">
                                <label for="box-17">Top Tier, entirely bespoke.</label>
                                <input type="checkbox" name="imagery[]" id="box-18">
                                <label for="box-18">A blend of high end stock databases and product catalogs.</label>
                                <input type="checkbox" name="imagery[]" id="box-19">
                                <label for="box-19">Imagery sourced from stock databases and product catalogs.</label>
                                <input type="checkbox" name="imagery[]" id="box-20">
                                <label for="box-20">I will supply all of the imagery to be used wthin the site.</label>
                                <input type="checkbox" name="imagery[]" id="box-21">
                                <label for="box-21">None.</label>
                                <input type="checkbox" name="imagery[]" id="box-22">
                                <label for="box-22">Other.</label>

                                <h4>How would you envisage updates to content being performed?</h4>
                                <input type="checkbox" name="editor[]" id="box-23">
                                <label for="box-23">Internally via content management system</label>
                                <input type="checkbox" name="editor[]" id="box-24">
                                <label for="box-24">Internally via source code editor (Zonefirewall will provide the guidance)</label>
                                <input type="checkbox" name="editor[]" id="box-25">
                                <label for="box-25">Zonefirewalls ongoing management services</label>
                                <input type="checkbox" name="editor[]" id="box-26">
                                <label for="box-26">Other</label>
                            </div>
                        </div>
                        <div class="wizard__footer">
                            <p class="button previous">Previous</p>
                            <p id="next_btn" class="button next">Next</p>
                            <button id="submit_btn" class="button next">Finish</button>
                        </div>
                    </form>
                    <!-- <div class="wizard__footer">
                                <button class="button previous">Previous</button>
                                <button class="button next">Next</button>
                                <button class="button next" type="submit">Finish</button>
                            </div>-->
                </div>
                <h1 class="wizard__congrats-message">
                    Congratulations, you are now in a queue of developing a Website!
                </h1>
            </div>
        </div>

        <script type="text/javascript">
            $('#domain_other').css('display', 'none');
            $("#domain").change(function () {
                if ($(this).val() == 'Other') {
                    $('#domain_other').css('display', 'block');
                } else {
                    $('#domain_other').css('display', 'none');
                }
            });
            $('#submit_btn').css('display', 'none');
            class Steps {
                constructor(wizard) {
                    this.wizard = wizard;
                    this.steps = this.getSteps();
                    this.stepsQuantity = this.getStepsQuantity();
                    this.currentStep = 0;
                }

                setCurrentStep(currentStep) {
                    this.currentStep = currentStep;
                }

                getSteps() {
                    return this.wizard.getElementsByClassName('step');
                }

                getStepsQuantity() {
                    return this.getSteps().length;
                }

                handleConcludeStep() {
                    this.steps[this.currentStep].classList.add('-completed');
                }

                handleStepsClasses(movement) {
                    if (movement > 0)
                        this.steps[this.currentStep - 1].classList.add('-completed');
                    else if (movement < 0)
                        this.steps[this.currentStep].classList.remove('-completed');
                }
            }

            class Panels {
                constructor(wizard) {
                    this.wizard = wizard;
                    this.panelWidth = this.wizard.offsetWidth;
                    this.panelsContainer = this.getPanelsContainer();
                    this.panels = this.getPanels();
                    this.currentStep = 0;

                    this.updatePanelsPosition(this.currentStep);
                    this.updatePanelsContainerHeight();
                }

                getCurrentPanelHeight() {
                    return `${this.getPanels()[this.currentStep].offsetHeight}px`;
                }

                getPanelsContainer() {
                    return this.wizard.querySelector('.panels');
                }

                getPanels() {
                    return this.wizard.getElementsByClassName('panel');
                }

                updatePanelsContainerHeight() {
                    this.panelsContainer.style.height = this.getCurrentPanelHeight();
                }

                updatePanelsPosition(currentStep) {
                    const panels = this.panels;
                    const panelWidth = this.panelWidth;

                    for (let i = 0; i < panels.length; i++) {
                        panels[i].classList.remove(
                                'movingIn',
                                'movingOutBackward',
                                'movingOutFoward'
                                );

                        if (i !== currentStep) {
                            if (i < currentStep)
                                panels[i].classList.add('movingOutBackward');
                            else if (i > currentStep)
                                panels[i].classList.add('movingOutFoward');
                        } else {
                            panels[i].classList.add('movingIn');
                        }
                    }

                    this.updatePanelsContainerHeight();
                }

                setCurrentStep(currentStep) {
                    this.currentStep = currentStep;
                    this.updatePanelsPosition(currentStep);
                }
            }

            class Wizard {
                constructor(obj) {
                    this.wizard = obj;
                    this.panels = new Panels(this.wizard);
                    this.steps = new Steps(this.wizard);
                    this.stepsQuantity = this.steps.getStepsQuantity();
                    this.currentStep = this.steps.currentStep;

                    this.concludeControlMoveStepMethod = this.steps.handleConcludeStep.bind(this.steps);
                    this.wizardConclusionMethod = this.handleWizardConclusion.bind(this);
                }

                updateButtonsStatus() {
                    if (this.currentStep === 0)
                        this.previousControl.classList.add('disabled');
                    else
                        this.previousControl.classList.remove('disabled');
                }

                updtadeCurrentStep(movement) {
                    this.currentStep += movement;
                    this.steps.setCurrentStep(this.currentStep);
                    this.panels.setCurrentStep(this.currentStep);

                    this.handleNextStepButton();
                    this.updateButtonsStatus();
                }

                handleNextStepButton() {
                    if (this.currentStep === this.stepsQuantity - 1) {
//                        this.nextControl.innerHTML = 'Finish!';
                        $('#submit_btn').css({'display': 'inline-block'});
                        $('#next_btn').css({'display': 'none'});

                        this.nextControl.removeEventListener('click', this.nextControlMoveStepMethod);
                        this.nextControl.addEventListener('click', this.concludeControlMoveStepMethod);
                        this.nextControl.addEventListener('click', this.wizardConclusionMethod);
                    } else {
//                        this.nextControl.innerHTML = 'Next';
                        $('#next_btn').css({'display': 'inline-block'});
                        $('#submit_btn').css({'display': 'none'});

                        this.nextControl.addEventListener('click', this.nextControlMoveStepMethod);
                        this.nextControl.removeEventListener('click', this.concludeControlMoveStepMethod);
                        this.nextControl.removeEventListener('click', this.wizardConclusionMethod);
                    }
                }

                handleWizardConclusion() {
                    this.wizard.classList.add('completed');
                }
                ;
                        addControls(previousControl, nextControl) {
                    this.previousControl = previousControl;
                    this.nextControl = nextControl;
                    this.previousControlMoveStepMethod = this.moveStep.bind(this, -1);
                    this.nextControlMoveStepMethod = this.moveStep.bind(this, 1);

                    previousControl.addEventListener('click', this.previousControlMoveStepMethod);
                    nextControl.addEventListener('click', this.nextControlMoveStepMethod);

                    this.updateButtonsStatus();
                }

                moveStep(movement) {
                    if (this.validateMovement(movement)) {
                        this.updtadeCurrentStep(movement);
                        this.steps.handleStepsClasses(movement);
                    } else {
                        throw('This was an invalid movement');
                    }
                }

                validateMovement(movement) {
                    const fowardMov = movement > 0 && this.currentStep < this.stepsQuantity - 1;
                    const backMov = movement < 0 && this.currentStep > 0;

                    return fowardMov || backMov;
                }
            }

            let wizardElement = document.getElementById('wizard');
            let wizard = new Wizard(wizardElement);
            let buttonNext = document.querySelector('.next');
            let buttonPrevious = document.querySelector('.previous');

            wizard.addControls(buttonPrevious, buttonNext);

        </script>
    </body>
</html>
