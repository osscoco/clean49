<!doctype html>
<html lang="en">
    <head>
        <title>Clean 49</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" />

	</head>
	<body>
        <section class="ftco-section" style="zoom: 80%;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="wrapper">
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <div class="contact-wrap w-100 p-lg-5 p-4">
                                        <h3 class="mb-4">Envoyez-nous un message</h3>
                                        <div id="form-message-warning" class="mb-4"></div> 
                                        <div id="form-message-success" class="mb-4">
                                            Votre message a bien été envoyé, merci !
                                        </div>
                                        <form action="{{ route('send-message') }}" method="POST" id="contactForm" name="contactForm" class="contactForm">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="tel" id="tel" placeholder="Téléphone Mobile">
                                                    </div>
                                                </div>
                                                <div class="col-md-12"> 
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12"> 
                                                    <div class="form-group">
                                                        <input type="datetime-local" class="form-control" id="datetime-local" name="datetime-local" value="2024-01-01T00:00" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Envoyer" class="btn btn-primary">
                                                        <div class="submitting"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>    
                                                <strong>Email envoyé avec succès !</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	    <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
        <!-- <script src="{{ asset('js/main.js') }}"></script> -->
	</body>
</html>