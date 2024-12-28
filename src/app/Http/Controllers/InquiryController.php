<?php
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function search(Request $request)
    {
        $query = Inquiry::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        if ($request->has('email')) {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }
        if ($request->has('gender')) {
            $query->where('gender', $request->input('gender'));
        }
        if ($request->has('phone')) {
        $query->where('phone', 'like', '%' . $request->phone . '%');
        }

        if ($request->has('inquiry_type')) {
            $query->where('inquiry_type', 'like', '%' . $request->input('inquiry_type') . '%');
        }
        if ($request->has('date')) {
            $query->whereDate('created_at', $request->input('date'));
        }

        $inquiries = $query->paginate(7);

        return view('inquiries.index', compact('inquiries'));
    }
}
