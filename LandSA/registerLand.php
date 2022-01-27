<!DOCTYPE html>
    <html lang="ar" style='direction: rtl'>
        <head>
            <title>Lands Registration</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="UTF-8">
            <link rel="stylesheet" href="./style.css">
            <script src="./components/ComponentHandler.js" ></script>
        </head>
        <body>
            <!--header call-->
            <div id="Head" w3-include-html="components/nav.html"></div>

            <!--land regiestration form start-->
            <main>
                <aside></aside><!--just to make it look better with flex display-->
                <div class="container">
                    <h1 class="title">Registration Form</h1>
                    <div class="indicator">
                        <span class="line"><span></span></span>
                        <p class="active">1</p>
                        <p>2</p>
                        <p>3</p>
                    </div>
                    <form method="get" action="landHandler.php">
                        <div class="tab show">
                            <h2>Owner information:</h2>
                            <p>Owner name</p>
                            <div class="form">
                                <input type="text" placeholder="first name & last name" name="name">
                            </div>
                            <p>Nationality</p>
                            <div class="form">
                                <input type="text" placeholder="Saudi" name="nationality">
                            </div>
                            <p>Share/ Percentage</p>
                            <div class="form">
                                <input type="number" placeholder="100" name="share"> <p class="data">Square meters</p>
                            </div>
                            <p>Address</p>
                            <div class="form">
                                <input type="text" placeholder="Makkah, Alhamrah, ...str" name="address">
                            </div> 
                            <p>ID type</p>
                            <div class="form">
                                <div class="custom_select">
                                    <select name="id-type">
                                        <option value="">Select</option>
                                        <option value="card">Identity Card</option>
                                        <option value="passport">Passport</option>
                                    </select>
                                </div>
                            </div>
                            <p>ID number</p>
                            <div class="form">
                                <input type="number" minlength="10" maxlength="10" placeholder="0000000000" name="id-num">
                            </div>
                        </div>

                        <div class="tab">
                            <h2>Real estate unit data:</h2>
                            <p>Piece Number</p>
                            <div class="form">
                                <input type="number" placeholder="0000">
                            </div>  
                            <p>Block number</p>
                            <div class="form">
                                <input type="number" placeholder="0000">
                            </div>  
                            <p>Plan number </p>
                            <div class="form">
                                <input type="number" placeholder="0000">
                            </div>
                            <p>Neighborhood Name</p>  
                            <div class="form">
                                <input type="text" placeholder="Alhamrah">
                            </div>
                            <p>City</p>
                            <div class="form">
                                <input type="text" placeholder="Makkah">
                            </div>
                            <p>Unit type</p>
                            <div class="form">
                                <div class="custom_select">
                                    <select>
                                        <option value="">Select</option>
                                        <option value="card">Residential</option>
                                        <option value="passport">Commercial</option>
                                    </select>
                                </div>
                            </div> 
                            <p>Deed Number</p>
                            <div class="form">
                                <input type="text" minlength="12" maxlength="12" placeholder="000000000000">
                            </div>  
                            <p>Deed date</p>
                            <div class="form">
                                <input type="date" class="input">
                            </div>  
                            <p>Court Issued</p>
                            <div class="form">
                                <input type="text" placeholder="000">
                            </div>
                            <p>Space in numbers</p>
                            <div class="form">
                                <input type="number" placeholder="length"> <input type="number" placeholder="width">
                            </div>  
                            <p>Space in writing</p>
                            <div class="form">
                                <input type="text" placeholder="length"> <input type="text" placeholder="width">
                            </div>  
                            <p>Borders: North, south, east, west</p>
                            <div class="form">
                                <input type="number" placeholder="North"> <input type="number" placeholder="South"> <input type="number" placeholder="East"> <input type="number" placeholder="West">
                            </div> 
                            <p>Length: North, south, east, west</p>
                            <div class="form">
                                <input type="number" placeholder="North"> <input type="number" placeholder="South"> <input type="number" placeholder="East"> <input type="number" placeholder="West">
                            </div>  
                            <p>Coordinates and corners of the unit </p>
                            <div class="form">
                                <input type="text" placeholder="000000.000">
                            </div>   
                            <p>Location Map</p>
                            <div class="form">
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="tab">
                            <input type="file" accept="image/*" onchange="loadFile(event)">
                            <img id="output"/>
                        </div>

                        <div class="btn">
                            <button type="button" class="prev">Previous</button>
                            <button type="button" class="next">Next</button>
                        </div>
                    </form>
                </div>
                <aside></aside><!--just to make it look better with flex display-->
            </main>
            <!--land regiestration form end-->

            <!--footer call-->
            <div id="footer"></div>

            <!--form script strat-->
            <script>
                const btnNext = document.querySelector('form .btn .next');
                const btnPrev = document.querySelector('form .btn .prev');
                const indicator = document.querySelector('.indicator .line span');
                const indicatorItems = document.querySelectorAll('.indicator p');
                const form = document.querySelector('form');
                const allTab = document.querySelectorAll('form .tab');
                let i = 0;
                
                allTab[i].classList.add('show');
                indicator.style.width = i;
                indicatorItems[i].classList.add('active');

                if(i === 0) {
                    btnPrev.style.display = 'none';
                } else {
                    btnPrev.style.display = 'block';
                }
                
                btnNext.addEventListener('click', function() {
                    /*const allInputPerTab = allTab[i].querySelectorAll('input');
                    for (let j = 0; j < allInputPerTab.length; j++) {
                        allInputPerTab[j].addEventListener('input', function () {
                            allInputPerTab[j].style.borderColor = '#ddd';
                        });
                        if (allInputPerTab[j].value === '' || !allInputPerTab[j].checkValidity()) {
                            allInputPerTab[j].style.borderColor = 'red';
                            return false;
                        } else{
                            allInputPerTab[j].style.borderColor = '#ddd';
                        }
                    }*/

                    i += 1;

                    if(i >= allTab.length){
                        form.submit();
                        return false;
                    }else{
                        for (let j = 0; j<allTab.length; j++) {
                            allTab[j].classList.remove('show');
                            indicatorItems[j].classList.remove('active');
                        }

                        for(let j = 0; j < i; j++) {
                            indicatorItems[j].classList.add('active');
                        }

                        allTab[i].classList.add('show');
                        indicator.style.width = `${i * 50}%`;
                        indicatorItems[i].classList.add('active');
                    }
                    
                    if(i === 0) {
                        btnPrev.style.display = 'none';
                    } else {
                        btnPrev.style.display = 'block';
                    }
                                
                    if(i === allTab.length - 1) {
                        btnNext.innerHTML = 'Submit';
                    } else {
                        btnNext.innerHTML = 'Next'; 
                    }
                })

                btnPrev.addEventListener('click', function () {
                    i -= 1;
                    for(let j = 0; j < allTab.length; j++) {
                        allTab[j].classList.remove('show');
                        indicatorItems[j].classList.remove('active');
                    }
                    for(let j = 0; j < i; j++) {
                        indicatorItems[j].classList.add('active');
                    }
                    allTab[i].classList.add('show');
                    indicator.style.width = `${i * 50}%`;
                    indicatorItems[i].classList.add('active');
                    if(i === 0) {
                        btnPrev.style.display = 'none';
                    } else {
                        btnPrev.style.display = 'block';
                    }
                    if(i === allTab.length - 1) {
                        btnNext.innerHTML = 'Submit';
                    } else {
                        btnNext.innerHTML = 'Next'; 
                    }
                });
            </script>
            <!--form script end-->

            <script>
                //preview photo code
                var loadFile = function(event) {
                    var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                    output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                    }
                };
            </script>
            <script>includeHTML();</script>
        </body>
    </html>