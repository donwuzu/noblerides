<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
     public function index()
    {
          $bookings = Booking::latest()->get();

    $totalBookings = Booking::count();
     $totalMessages = ContactMessage::count();

    return view('dashboard', compact('bookings', 'totalBookings', 'totalMessages'));
    }



public function bookings()
{
    $bookings = Booking::latest()->paginate(15);
    return view('admin.bookings', compact('bookings'));
}

public function messages()
{
    $messages = ContactMessage::latest()->paginate(15);
    return view('admin.messages', compact('messages'));
}

   public function destroyMessage(ContactMessage $message)
    {
        // Optional authorization check
        // $this->authorize('delete', $message);
        
        $message->delete();
        
        return redirect()
            ->route('admin.messages')
            ->with('success', 'Message deleted successfully');
    }

     public function destroyBooking(Booking $booking)
    {
        // Optional authorization check
        // $this->authorize('delete', $message);
        
        $booking->delete();
        
        return redirect()
            ->route('admin.bookings')
            ->with('success', 'Booking deleted successfully');
    }
}
