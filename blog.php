 <!-- ==========================
    	BLOG - START
    =========================== -->   
    <section id="blog" class="content-first">
    	<div class="container">
        	<h2 class="scrollpoint sp-effect3">Latest Blog Posts</h2>
        	 
        </div>
            
        <div class="line hidden-xs">
        	<div class="container">
                <div class="row">
                    <div class="col-sm-4"><i class="fa fa-bullhorn"></i></div>
                    <div class="col-sm-4"><i class="fa fa-bullhorn"></i></div>
                    <div class="col-sm-4"><i class="fa fa-bullhorn"></i></div>
                </div>
            </div>
        </div>
		
        <div class="container">
            <div class="row"><!-- MAIN ROW - Start -->
            	<!-- BLOG POST - Start -->
                <div class="col-sm-4 scrollpoint sp-effect1">
                	<div class="blog-post">
                    	<div class="blog-body">
                    		<h3>Grails createCriteria order by condition on hasMany </h3>
<pre>
def c = Manager.createCriteria()

def managerList = c.list {
        
              if (params.query.isNumber()){
                  eq("id", Long.parseLong(params.query))
                  order("id", "desc")
                
              }else{
                  contact{
                      or{
                        ilike("firstName", "%${params.query}%")
                        ilike("lastName", "%${params.query}%")
                      }
                      order("firstName", "desc")
                      order("lastName", "desc")
                  }
                  
              }
              maxResults(20)
 }
</pre>
                        	<a href="" class="btn btn-primary">Read More</a>
                        </div>
                        
                    </div>
                </div>
                <!-- BLOG POST - End -->
                
                <!-- BLOG POST - Start -->
                <div class="col-sm-4 scrollpoint sp-effect3">
                	<div class="blog-post">
                    	<div class="blog-body">
                    		<h3>Lorem Ipsum</h3>
                        	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                        	<a href="" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="blog-info">
                        	<a><i class="fa fa-comment"></i> 352</a>
                            <a><i class="fa fa-calendar"></i> 21/03/2014</a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <!-- BLOG POST - End -->
                
                <!-- BLOG POST - Start -->
                <div class="col-sm-4 scrollpoint sp-effect2">
                	<div class="blog-post">
                    	<div class="blog-body">
                    		<h3>Lorem Ipsum</h3>
                        	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                        	<a href="" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="blog-info">
                        	<a><i class="fa fa-comment"></i> 352</a>
                            <a><i class="fa fa-calendar"></i> 21/03/2014</a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <!-- BLOG POST - End -->
                
            </div><!-- MAIN ROW - end -->
        </div><!-- CONTAINER - end -->
    </section>
    <!-- ==========================
    	BLOG - END 
    =========================== --> 