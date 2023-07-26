<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <!-- Add your CSS files or styles here -->
    <!-- For example, you can include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Welcome to our website!</h1>
        <!-- Your page content here -->

        @if(session('message'))
        <div class="alert alert-{{ session('status') }}">
            {{ session('message') }}
        </div>
        @endif

        <!-- Bootstrap Modal
        <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="messageModalLabel">Message</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        This is where the message will be displayed
                        <p id="messageText"></p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Add your JavaScript files or scripts here -->
    <!-- For example, you can include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Your AJAX code goes here
        // (The code provided earlier to handle form submission and show the modal)
    </script>
</body>

</html>
