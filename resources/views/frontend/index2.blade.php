<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/icons/logo3.png') }}"  type="image/x-icon">
    <title>CotiAfrica</title>
   
    <style>
   
        .container {
            width: 90%;
            margin: 20px auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table thead {
            background-color: #1E88E5;
            color: white;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table-hover tbody tr:hover {
            background-color: #e2e6ea;
        }


        .table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

    
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

    
        @media screen and (max-width: 600px) {
            .table th,
            .table td {
                padding: 8px;
                font-size: 14px;
            }

            h2 {
                font-size: 18px;
                margin-bottom: 15px;
            }

            .container {
                width: 95%;
            }

            .table {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

    
    
    @if(Auth::check())
        <div class="container">
            <h2>Messages from Contact Form</h2>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message Content</th>
                            <th>Received</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through messages and display each row -->
                        @forelse($messages as $message)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->messageContent }}</td>
                                <td>{{ $message->created_at->format('Y-m-d') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No messages found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <script>
            window.location.href = "{{ route('login') }}";
        </script>
    @endif
</body>
</html>
