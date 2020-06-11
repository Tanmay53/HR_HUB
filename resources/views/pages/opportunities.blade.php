@extends('layouts.siteLayout')

@section('content')
    <div class="container pt-5" id="introduction">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10">
          <h1> Human Resource </h1>
          <p>Many people are eager to start a career in Human Resources (HR). It is a fast-growing field with many lucrative opportunities for managers, HR generalists, and more. There are several job titles for which you may eventually qualify if you pursue an HR career.</p>
          <p>Career analysts expect the number of Human Resources jobs to increase in the future, and the median annual income for careers in the field is above the national average. This all makes Human Resources careers exceptional opportunities for people starting out in the workforce.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-md-10">
          <h3>Following Opportunities Await You :</h3>
          <ul class="list-group ml-5">
            <li class="list-item"><a href="#recruitment" class="text-primary">Recruitment and Selection</a></li>
            <li class="list-item"><a href="#compensation" class="text-primary">Compensation and Benefits</a></li>
            <li class="list-item"><a href="#health" class="text-primary">Health and Safety</a></li>
            <li class="list-item"><a href="#relations" class="text-primary">Labor and Employee Relations</a></li>
            <li class="list-item"><a href="#training" class="text-primary">Training and Development</a></li>
            <li class="list-item"><a href="#risk_management" class="text-primary">Risk Management</a></li>
            <li class="list-item"><a href="#managing" class="text-primary">Managing and Directing</a></li>
          </ul>
        </div>
      </div>

      <!-- Different Fields in HR -->
      
      <hr class="featurette-divider">
      <div class="row justify-content-center featurette" id="recruitment">
        <div class="col-md-7">
          <h3 class="featurette-heading">Recruitment and Selection</h3>
          <p class="lead">Human resource management jobs include professional recruiters who filll vacancies within an organization. They follow internal hiring policies and comply with all state and federal laws prohibiting discriminatory hiring practices. These human resources professionals may write job advertisements, screen resumes, interview candidates and make hiring recommendations to managers. Examples include recruiter, staffing specialist and recruitment manager.</p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('images/recruitment.png')}}" alt="Recruitment" class="featurette-image img-fluid">
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row justify-content-center featurette" id="compensation">
        <div class="col-md-7">
          <h3 class="featurette-heading">Compensation and Benefits</h3>
          <p class="lead">Compensation and benefit specialists are an example of another type of human resources job. They ensure that employees are paid correctly. They also work to provide employees with benefits such as health insurance, dental and vision coverage, life insurance and short-term disability coverage. Professionals in this area may conduct salary surveys, analyze industry salary data, prepare and distribute compensation reports to employees and negotiate benefits packages with outside vendors.</p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('images/compensation.jpg')}}" alt="Recruitment" class="featurette-image img-fluid">
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row justify-content-center featurette" id="health">
        <div class="col-md-7">
          <h3 class="featurette-heading">Health and Safety</h3>
          <p class="lead">Health and safety professionals work to prevent workplace accidents and occupational illnesses. They offer safety programs, implementing health and safety policies, and ensuring compliance with state and federal occupational safety regulations. Jobs in this human resources area include safety coordinator, safety manager, employee wellness program coordinator and director of employee wellness.</p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('images/health.png')}}" alt="Recruitment" class="featurette-image img-fluid">
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row justify-content-center featurette" id="relations">
        <div class="col-md-7">
          <h3 class="featurette-heading">Labor and Employee Relations</h3>
          <p class="lead">Labor relations refers to the relationship between an employer and its employees. Someone who works in the labor relations field may negotiate contracts between managers and workers. Employee relations workers prevent and resolve problems related to employee performance. They work to maintain positive employer-employee relationships to prevent decreased morale and reduced productivity. Jobs available in this area of human resources include director of labor relations, employee relations specialist and employee relations representative.</p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('images/relations.png')}}" alt="Recruitment" class="featurette-image img-fluid">
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row justify-content-center featurette" id="training">
        <div class="col-md-7">
          <h3 class="featurette-heading">Training and Development</h3>
          <p class="lead">Training and development professionals assess an organization's training needs, deliver training to employees and evaluate the results of completed training programs. These professionals may also conduct orientation programs for new employees. Training professionals make sure that employees complete training as required by Occupational Safety and Health Administration and other regulatory agencies. Jobs in the training field include training specialist, training and development manager, instructional designer, e-learning specialis and manager of learning and development</p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('images/training.jpg')}}" alt="Recruitment" class="featurette-image img-fluid">
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row justify-content-center featurette" id="risk_management">
        <div class="col-md-7">
          <h3 class="featurette-heading">Risk Management</h3>
          <p class="lead">Risk management is a business approach used to minimize organizational risk. In human resources, risk management involves analyzing each area and identifying the potential for harm. For example, a risk management professional might examine an organization's hiring practices and determine if any are potentially discriminatory and could lead to a lawsuit. Risks identified during this process include the potential for abuse, property loss, physical injury and damage to a company's reputation. Jobs available in this area include risk management specialist and manager of risk management.</p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('images/risk.jpg')}}" alt="Recruitment" class="featurette-image img-fluid">
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row justify-content-center featurette" id="managing">
        <div class="col-md-7">
          <h3 class="featurette-heading">Managing and Directing</h3>
          <p class="lead">Human resources managers and directors oversee the work of other human resources professionals. Managers may serve as a liaison between employees and management, participate in company strategy sessions and make recommendations for new hiring and compensation policies. A human resources director has knowledge of all aspects of human resource management. Directors develop departmental goals and assist staff in meeting those goals. This job requires excellent conflict resolution and mediation skills, as a human resources director may need to resolve controversial or sensitive issues.</p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('images/managers.jpeg')}}" alt="Recruitment" class="featurette-image img-fluid">
        </div>
      </div>
    </div>
@endsection