<h2>  
    {{ $job->title }}
</h2>
<p>
Congrats! Your job is now live on our website.
</P>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View Your Job Listing</a>    
</p>