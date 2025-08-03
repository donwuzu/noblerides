<h2>New Booking Request</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] ?? 'N/A' }}</p>
<p><strong>Service Type:</strong> {{ $data['service_type'] }}</p>
<p><strong>Vehicle Type:</strong> {{ $data['vehicle_type'] ?? 'N/A' }}</p>
<p><strong>Pickup:</strong> {{ $data['pickup'] }}</p>
<p><strong>Dropoff:</strong> {{ $data['dropoff'] }}</p>
<p><strong>Date & Time:</strong> {{ $data['datetime'] }}</p>
<p><strong>Passengers:</strong> {{ $data['people'] }}</p>
<p><strong>Luggage:</strong> {{ $data['luggage'] ?? 'N/A' }}</p>
<p><strong>Instructions:</strong> {{ $data['instructions'] ?? 'N/A' }}</p>
