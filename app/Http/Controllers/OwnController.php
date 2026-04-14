<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;
use App\Models\About;
use App\Models\Contact;
use App\Models\Education;

class OwnController extends Controller
{
    public function front(){

    return view('portfolio.front');
    }

  public function projects(){
     $projects = Project::latest()->get();
    return view('portfolio.projects',compact('projects'));
}

public function fillProjects(){

return view('form.projects.projects-fill');
}

public function projectStore(Request $request){
  $data = $request->validate([

  'title'=> 'required|string|max:255',
  'description'=>'required|string',
 'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:8000',
  'status'=>'required',
  'order'=>'required',
  ]);

  $newImage = "";
  if($request->hasFile('image')){
  $file = $request->file('image');
  $newImage = time().'.'.$file->getClientOriginalExtension();
  $file->storeAs('photos',$newImage,'public');
  }

  $projects = new Project();
  $projects->title = $data['title'];
  $projects->description = $data['description'];
  $projects->image = $newImage;
  $projects->status = $data['status'];
  $projects->order = $data['order'];

  $projects->save();

  return redirect()->back()->with('success','your projects has been saved in portfolio');

}

// ------------------------------skills-----------------------------//
public function skills(){

$skills = Skill::all();
$educations = Education::all();

return view('portfolio.skills', compact('skills', 'educations'));
}

public function skillFill(){

return view('form.skill.skills-fill');
}

public function skillStore(Request $request){
  $data = $request->validate([
    'name'=>'required|string',
    'percentage'=>'required',
    'category'=>'nullable',
    
  ]);
  $skills = new Skill();
  $skills->name = $data['name'];
  $skills->percentage = $data['percentage'];
  $skills->category = $data['category'];

  $skills->save();

  return redirect()->back()->with('success','your skills has save in portfolio');
}

// -----------------------------abouts-------------------------------//
public function abouts(){

$abouts = About::all();

return view('portfolio.abouts', compact('abouts'));
}

public function aboutFill(){

return view('form.about.abouts-fill');
}

public function aboutStore(Request $request){
  $data = $request->validate([
    'title'=>'required|string',
    'role'=>'required',
    'description'=>'required',
   'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:8000',
   'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10000',
  ]);

  $newImage = "";
  $newBanner = "";
  if($request->hasFile('image')){
    $file = $request->file('image');
    $newImage = time().'.'.$file->getClientOriginalExtension();
    $file->storeAs('photos',$newImage,'public');
  }

    if($request->hasFile('banner')){
    $file = $request->file('banner');
    $newBanner = time().'.'.$file->getClientOriginalExtension();
    $file->storeAs('photos',$newBanner,'public');
  }


  $about = new About();
  $about->title = $data['title'];
  $about->role = $data['role'];
  $about->description = $data['description'];
  $about->image = $newImage;
  $about->banner = $newBanner;

  $about->save();

  return redirect()->back()->with('success','your abouts data has been saved in portfolio');
}

// ------------------------contacts------------------------------------//
public function contacts(){

$contacts = Contact::all();

return view('portfolio.contacts', compact('contacts'));
}

public function contactFill(){

return view('form.contact.contacts-fill');
}

public function  contactStore(Request $request){
  $data = $request->validate([
    'name'=>'required|string',
    'email'=>'required|email|string',
    'whatsapp'=>'required|integer',
    'social'=>'required|string',
    'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10000',
  ]);

  $heroImage = "";
  if($request->hasFile('image')){
    $file = $request->file('image');
    $heroImage = time().'.'.$file->getClientOriginalExtension();
    $file->storeAs('photos',$heroImage,'public');
  }

  $contact = new Contact();
  $contact->name = $data['name'];
  $contact->email = $data['email'];
  $contact->whatsapp = $data['whatsapp'];
  $contact->social = $data['social'];
  $contact->image = $heroImage;

  $contact->save();

  return redirect()->back()->with('success','contacts has been saved in portfolio');
}

public function educationFill(){

return view('form.education.education-fill');
}

public function educationStore(Request $request)
{
    
    $data = $request->validate([
        'degree' => 'required|string|max:255',
        'institution' => 'required|string|max:255',
        'field' => 'nullable|string|max:255',
        'start_year' => 'required|digits:4',
        'end_year' => 'nullable|digits:4',
        'status' => 'required|in:running,completed',
    ]);

    $educations = new Education();
    $educations->degree = $data['degree'];
    $educations->institution = $data['institution'];
    $educations->field = $data['field'];
    $educations->start_year = $data['start_year'];
    $educations->end_year = $data['end_year'];
    $educations->status = $data['status'];

    $educations->save();
   
    return redirect()->back()->with('success', 'Education added successfully 🎓');
}

}
