<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Advertising' hidden='1' order='100'> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <cms:embed 'header.html' />
        <title>Advertising - Springfield Mid-America Singers</title>
    </head>

    <body>
        <cms:embed 'nav-bar.html' />
        <div class="body">
            <h1>Advertising Contract</h1>
            <br>
            <p class="lead">If you would like to advertise with us, please fill out the contract below. For more information you can contact our head of advertising directly <a href="mailto:advertising@smasingers.org?subject=Advertising%Question">by clicking here.</a></p>
            <form action="https://my.bluehost.com/bluemail" enctype="multipart/form-data" method="POST" id="advertising-contract">
                <input type="hidden" name="sendtoemail" value="advertising@smasingers.org" />
                <input type="hidden" name="subject" value="Avertising Contract" />
                <input type="hidden" name="redirect" value="<cms:link masterpage='contract-recieved.php' />">
                <div class="row">
                    <br>
                    <h3>Company Information</h3>
                    <br>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">Today's Date:</p>
                        </div>
                        <div class="small-9 column">
                            <input class="full-width" type="date" name="Date" value="" required> </div>
                    </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">Your Name:</p>
                        </div>
                        <div class="small-9 column">
                            <input class="full-width" type="text" name="Company_Contact" value="" required> </div>
                    </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">Email:</p>
                        </div>
                        <div class="small-9 column">
                            <input class="full-width" type="text" name="email" value="" required> </div>
                    </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">Phone:</p>
                        </div>
                        <div class="small-9 column">
                            <input class="full-width" type="text" name="Phone_Number" value="" required> </div>
                    </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">Company:</p>
                        </div>
                        <div class="small-9 column">
                            <input class="full-width" type="text" name="Company" value="" required> </div>
                    </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">Street Address:</p>
                        </div>
                        <div class="small-9 column">
                            <input class="full-width" type="text" name="Street_Address" value="" required> </div>
                    </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">City:</p>
                        </div>
                        <div class="small-9 column">
                            <input class="full-width" type="text" name="City" value="" required> </div>
                    </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">State:</p>
                        </div>
                        <div class="small-9 column">
                            <select class="full-width" name="State">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">Zip Code:</p>
                        </div>
                        <div class="small-9 column">
                            <input class="full-width" type="text" name="Zip_Code" value="" required maxlength="5"> </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="row">
                        <h3>Advertisement Information</h3>
                        <br> </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">Size:</p>
                        </div>
                        <div class="small-9 column">
                            <cms:pages masterpage='index.php'>
                                <cms:if print_ads=='yes'>
                                    <p>
                                        <input type="radio" name="size" value="digital_logolink"> Digital Website Logo Ad (Please include a web address along with your logo to be display on a dark background) - $50</p>
                                    <br>
                                    <p class="">
                                        <input type="radio" name="size" value="business_card"> Business Card/Eighth-Page (3.5” x 2”) - $100</p>
                                    <br>
                                    <p class="">
                                        <input type="radio" name="size" value="quarter-page_horizontal"> Quarter-Page Horizontal (4.5” x 1.75”) - $200</p>
                                    <br>
                                    <p class="">
                                        <input type="radio" name="size" value="quarter-page_vertical"> Quarter-Page Vertical (3.75” x 2.25”) - $200</p>
                                    <br>
                                    <p class="">
                                        <input type="radio" name="size" value="half-page_horizontal"> Half-Page Horizontal (4.5 x 3.75) - $300</p>
                                    <br>
                                    <p class="">
                                        <input type="radio" name="size" value="half-page_vertical"> Half-Page Vertical (2.25” x 7.5”) - $300</p>
                                    <br>
                                    <p class="">
                                        <input type="radio" name="size" value="full-page"> Full-Page (4.5 x 7.5”) - $500</p>
                                    <br>
                                    <cms:else />
                                    <p>
                                        <input type="radio" name="size" value="digital_logolink"> Digital Website Logo Ad (Please include a web address along with your logo to be display on a dark background) - $50</p>
                                    <br> </cms:if>
                            </cms:pages>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">Design:</p>
                        </div>
                        <div class="small-9 column">
                            <select class="full-width" name="Design" required>
                                <option value="use_same_design">Use my design from last year</option>
                                <option value="already_emailed_design">Design was already sent via email</option>
                                <option value="design_attached">Design is attached (Please upload below)</option>
                            </select>
                            <br>
                            <br>
                            <input type="file" name="file_attachment" /> </div>
                        <div class="row">
                            <div class="small-3 column text-right">
                                <p class="lead">Website:</p>
                            </div>
                            <div class="small-9 column">
                                <input class="full-width" type="text" name="design_website" value=""> </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="row">
                        <h3>Payment Information</h3>
                        <br> </div>
                    <div class="row text-center">
                        <p class="lead">Please make checks payable to Springfield Mid-America Singers. Place ADVERTISING in the memo line.
                            <br>
                            <br><b><i>Mail them to:</i></b>
                            <br>Springfield Mid-America Singers
                            <br>ATTN: Advertising
                            <br>The Creamery Arts Center
                            <br>411 N. Sherman Parkway
                            <br>Springfield, MO 65802</p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">Check #:</p>
                        </div>
                        <div class="small-9 column">
                            <input class="full-width" type="text" name="Check_Number" value="" required> </div>
                    </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">Amount:</p>
                        </div>
                        <div class="small-9 column">
                            <input class="full-width" type="text" name="Amount" value="$" required> </div>
                    </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">Check Date:</p>
                        </div>
                        <div class="small-9 column">
                            <input class="full-width" type="date" name="Check_Date" value="" required> </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="row">
                        <h3>Final Information</h3>
                        <br> </div>
                    <div class="row">
                        <div class="small-3 column text-right">
                            <p class="lead">SMAS Representative:</p>
                        </div>
                        <div class="small-9 column">
                            <input class="full-width" type="text" name="SMAS_Singer" value="" placeholder="Springfield Mid-America Singer Name"> </div>
                    </div>
                    <br>
                    <div class="row text-center">
                        <p class="lead">Do you agree to pay the above amount for the advertisement described above?
                            <br><i>Agreement is considered signature and is legally binding.</i></p>
                        <div class="small-12 column text-center">
                            <input type="radio" name="Agreed_to_Terms" value="yes" checked> Yes
                            <input type="radio" name="agreement" value="no"> No</div>
                        <br>
                        <input type="submit" value="Submit Form" class="secondary button hide-for-print"> </div>
                </div>
            </form>
            <cms:embed 'secondary-content.html' />
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>
    <cms:embed 'google.html' />

    </html>
    <?php COUCH::invoke(); ?>