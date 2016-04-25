 <div class="container">
			
			<div class="main">
				<ul id="cbp-bislideshow" class="cbp-bislideshow">
					<li><img src="./webroot/img/1.jpg" alt="image01"/></li>
					<li><img src="./webroot/img/3.jpg" alt="image02"/></li>
					<li><img src="./webroot/img/7.jpg" alt="image03"/></li>
					<li><img src="./webroot/img/11.jpg" alt="image04"/></li>
				</ul>
				
			</div>
		</div>


 <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">CLINICA DENTAL Y DE ESPECIALIDADES </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#inicio">Inicio</a></li>
            <li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tratamientos <span class="caret"></span></a>
          		<ul class="dropdown-menu">
            	<li><a href="#ortodoncia">Ortodoncia</a></li>
            	<li><a href="#endodoncia">Endodoncia</a></li>
           	 	<li><a href="#periodoncia">Periodoncia</a></li>
           	 	<li><a href="#protesis">Protesis Dental</a></li>
           	 	<li><a href="#implantologia">Implantologia</a></li>
           	 	<li><a href="#estetica">Estetica Dental</a></li>
           	 	<li><a href="#blanqueamiento">Blanqueamiento Dental</a></li>
           	 	<li><a href="#rehabilitacion">Rehabilitacion Oral</a></li>
            	<li role="separator" class="divider"></li>
            	<li class="disabled"> <a href="#">Cirugia Bucal:</a></li>
           	 	<li><a href="#quistes">Quistes</a></li>
           	 	<li><a href="#apicectomia">Apicectomia</a></li>
          	</ul>
        	</li>
            <li><a href="#misionvision">Mision y Vision</a></li>
            <li><a href="#galeria">Galeria</a></li>
            <li><a href="#">Sugerencia</a></li>
            <li><a href="#contactenos">Contactenos</a></li>
            <li class="page-scroll">
                        <a type="button" class="btn  btn-lg" data-toggle="modal" data-target="#myModal50" id="login">Login</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div class="modal fade" id="myModal50" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2>LOGIN</h2>
      </div>
      <div class="modal-body">
       <?= $this->Flash->render('auth') ?>
					<?= $this->Form->create('User', ['class' => 'navbar-form navbar-lefth']) ?>
  					<div class="form-group">
    				<?= $this->Form->input('username',['class' => 'form-control']) ?>
  					</div>
  							<div class="form-group">
    				<?= $this->Form->input('password',['class' => 'form-control']) ?>
  						</div>
   					<div class="form-group">
    					<?= $this->Form->button(__('Login'),['class'=>'btn btn-primary']); ?>
  					</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<br>

<section id="inicio">
	<div class="jumbotron">
  		<div class="container" id="contenidoinicio">
    		<center><h1>Bienvenido a la Clinica Dental y De Especialidades</h1></center>
    	<div class="container">
            <div class="row">
               <center> <h2>Acerca de Nosotros</h2> </center>
                <h4>Somos una clínica dental con especialistas en todas la áreas de la Odontología, contamos con unas instalaciones de última generación y la mas avanzada tecnología para ofrecerles a nuestros pacientes un servicio de máxima calidad y eficacia.
                Entre los tratamientos más destacados tenemos: prótesis dentales, cirugia bucal, implantes dentales y cirugia bucal
                El objetivo principal de nuestra clínica es ofrecerte los tratamientos más innovadores una alta calidad y garantía de trabajo.</h4>
                <div class="col-md-6 col-sm-6">
                    <div>
                        <div>
                            <img class="img-responsive" src="./webroot/img/nina.jpg" alt="">
                        </div>
                        <div>
                            
                         <h3>Especialistas en Tratamiento con niños</h3> 
                            <p>No se Asusta la niño cuando se realiza algun tratamiento dental, se explica al niño 
                            sobre la limpieza bucal con la ayuda de los padres, jamas utilizamos las palabras: pinchazo,
                            anestesia o aguja frente a los niños</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div>
                        <div>
                            <img class="img-responsive" src="./webroot/img/odontogen.jpg" alt="">
                        </div>
                        <div>
                            
                  <h3>Odontopediatría</h3> 
                            <p>especializado en la prevención y realización de procedimientos dentales, generalmente, en niños de hasta 14 años de edad. 
                            La idea es que este tipo de profesional sepa tratar adecuadamente a un niño, sin causar traumas, tratarlo de manera diferente; educar, 
                            corregir malos hábitos, prevenir la aparición de caries y anticiparse a problemas de salud dental futuros.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


  			</div>
		</div>
</section>


<section id="ortodoncia">
	<div class="jumbotron">
  		<div class="container" id="contenidoinicio">
    		<center><h1>Ortodoncia</h1></center>
    	<div class="container">
            <div class="row">
                <h2>Que es la Ortodoncia?</h2>
                <h4>La ortodoncia es una especialidad de la Odontología que se encarga de todo estudio, prevención, diagnóstico y tratamiento de las anomalías de forma, posición, relación y función de las estructuras dentomaxilofaciales; siendo su ejercicio el arte de prevenir, diagnosticar y corregir sus posibles alteraciones y mantenerlas dentro de un estado óptimo de salud y armonía, mediante el uso y control de diferentes tipos de fuerzas.</h4>
                <br>
                <h2>Tratamiento de ortodoncia</h2>
                <h4>El tratamiento de ortodoncia se puede realizar de dos maneras según el tipo de fuerzas que se apliquen, principalmente están:
              	<ul><li>La técnica fija mediante aparatología fija que está compuesta de elementos adheridos a los dientes (bandas y brackets) a los que se ancla firmemente unos finos arcos elásticos de aleación metálica (níquel-titanio) mediante un conjunto de ligaduras. Como se muestra en la siguiente imagen.</li></ul>

              		<center><img src="./webroot/img/ortodoncia/1.jpg" class="img-thumbnail"><p>Ortodoncia mediante Bandas y Brackets</p></center>
  				
                <ul><li>Los removibles, que permiten ser retirados de la boca por parte del paciente. Ello le permite quitárselos durante la higiene oral y en las comidas. Estos aparatos cuando tratan problemas dentales tienen sus indicaciones específicas que no suplen a la Ortodoncia fija, si bien solucionan algunas maloclusiones sencillas con un coste económico inferior y menos molestias para los pacientes. En cambio suelen ser ampliamente empleados en ortopedia de los maxilares con resultados muy diversos, pero siempre con mayor ámbito que la ortodoncia multibrackets. Se utilizan sobre todo como tratamiento en dentición temporal (temprana o infantil), donde determinados estados patológicos diagnosticados a tiempo pueden llegar a corregirse, hasta tal grado que el tratamiento en la dentición permanente sea muy específico o incluso innecesario.</li></ul>
                	<div class="container">
                		<div class="row">
                			<div class="col-lg-6 col-sm-6">
                				<center><img src="./webroot/img/ortodoncia/2.jpg" class="img-thumbnail"></center>
                			</div>
                			<div class="col-lg-6 col-sm-6">
                				<center><img src="./webroot/img/ortodoncia/3.jpg" class="img-thumbnail"></center>
                			</div>
                			
                		</div>
                	</div>

                </h4>
                <h2>Video Explicativo del Tratamiento de La Ortodoncia</h2>
        			<div class="embed-responsive embed-responsive-4by3">
  						<video controls="controls" class="embed-responsive-item" src="./webroot/videosgale/Ortodoncia.mp4"></video>
					</div>
            </div>
        </div>


  			</div>
		</div>
	

</section>

<section id="endodoncia">
	<div class="jumbotron">
  		<div class="container" id="contenidoinicio">
    		<center><h1>Endodoncia</h1></center>
    	<div class="container">
            <div class="row">
                <h2>Que es la Endodoncia?</h2>
                <h4>Es el procedimiento que se utiliza para eliminar en parte o en su totalidad la pulpa del diente y sellar el conducto pulpar. La pulpa es la parte más interior del diente y está constituida por un tejido blando que contiene los nervios y los vasos sanguíneos. La parte del conducto que se encuentra en el interior de la corona se denomina cavidad pulpar, mientras la correspondiente a la raíz recibe el nombre de conducto reticular y es el que conecta con el hueso maxilar.</h4>
                <br>
                <h2>Causas de Inflamacion:</h2>
                <h4>La causa más frecuente de la infección y consecuente inflamación y necrosis de la pulpa, y por tanto de la necesidad de realizar una endodoncia, es la existencia de caries, aunque existen otros factores que pueden generar una pulpitis o lesión de la pulpa los cuales son:
              	<ul>
              		<li>Traumatismos.</li>
              		<li>Erosion y descgaste de los dientes por el roce entre ellos.</li>
              		<li>La forma en que se realizan algunos tratamientos restauradores y los materiales que se utilizan en los mismos.</li>
              	</ul>
              	<br>
              	<h4>Para la realización de una endodoncia es necesario anestesiar la zona en la que se va actuar. Posteriormente se realiza un agujero en la corona del diente para poder acceder a la pulpa y extraerla y proceder a la limpieza del conducto antes de realizar la obturación y sellado del mismo y de la corona con materiales específicos. Al final de la intervención el diente quedará plenamente insensibilizado y aislado de cualquier otra parte del organismo.<br></h4>

     
              	<br>
                	<div class="container">
                		<div class="row">
                			<div class="col-lg-12 col-sm-12">
                		        <center><img class="img-responsive" src="./webroot/img/endodoncia/1.jpg"></center> 
                		    </div>
                			<div class="col-lg-6 col-sm-6">
                				<center><img class="img-responsive" src="./webroot/img/endodoncia/2.jpg" class="img-thumbnail"></center>
                			</div>
                			<div class="col-lg-6 col-sm-6">
                				<center><img class="img-responsive" src="./webroot/img/endodoncia/3.png" class="img-thumbnail"></center>
                			</div>
                			
                		</div>
                	</div>

                </h4>
                <h2>Video Explicativo del Tratamiento de Endodoncia</h2>
        			<div class="embed-responsive embed-responsive-4by3">
  						<video controls="controls" class="embed-responsive-item" src="./webroot/videosgale/endodoncia.mp4"></video>
					</div>
            </div>
        </div>


  			</div>
		</div>
	

</section>

<section id="periodoncia">
	<div class="jumbotron">
  		<div class="container" id="contenidoinicio">
    		<center><h1>Periodoncia</h1></center>
    	<div class="container">
            <div class="row">
                <h2>Que es la Periodoncia?</h2>
                <h4>Es la rama de la odontología que trata las enfermedades de las encías y del hueso que soporta al diente.<h4>
                <h2>Causas de las Enfermedades en las encias</h2>
                <h4>Las principales causas son:
                <ul>
                	<li>Los malos hábitos de higiene bucal.</li>
                	<li>Técnica deficiente de cepillado.</li>
                	<li>Hábito de fumar.</li>
                </ul>
                Estas causas ocasionan acumulación de restos de alimentos y otros irritantes que favorecen la proliferación de bacterias que producen substancias químicas que inflaman e irritan las encías. Esta es una de las enfermedades mas comunes que existe debido a que no presenta síntomas hasta que la enfermedad se encuentra en un estado muy avanzado.</h4>
                <h2>Sintomas para realizar Periodoncia</h2>
                <h4>Sus principales síntomas son: 
                <ul>
                	<li>Sangramiento frecuente de las encías.</li>
                	<li>Movilidad dental.</li>
                	<li>Mal aliento.</li>
                </ul>
                Es importante tomar en cuenta que la Periodontitis es una enfermedad seria que puede ocasionar pérdida irremediable de las piezas dentales, las cuales pueden ser repuestas con prótesis o implantes. También la Periodontitis crónica puede favorecer la aparición de otras enfermedades tanto bucales como a nivel sistémico, por tanto debe ser tratada por un especialista.
                </h4>	
                 
                 <h2>Ejemplo de Periodontitis:</h2>
                
     
              	<br>
                	<div class="container">
                		<div class="row">
                			<div class="col-lg-6 col-sm-6">
                				<center><img class="img-responsive" src="./webroot/img/periodoncia/1.jpg" class="img-thumbnail"></center>
                			</div>
                			<div class="col-lg-6 col-sm-6">
                				<center><img class="img-responsive" src="./webroot/img/periodoncia/2.jpg" class="img-thumbnail"></center>
                			</div>
                			
                		</div>
                	</div>

                </h4>
                <h2>Video Explicativo del Tratamiento de Periodoncia</h2>
        			<div class="embed-responsive embed-responsive-4by3">
  						<video controls="controls" class="embed-responsive-item" src="./webroot/videosgale/periodoncia.mp4"></video>
					</div>
            </div>
        </div>


  			</div>
		</div>
	

</section>

<section id="protesis">
	<div class="jumbotron">
  		<div class="container" id="contenidoinicio">
    		<center><h1>Protesis Dental</h1></center>
    	<div class="container">
            <div class="row">
                <h2>Que es Protesis Dental?</h2>
                <h4> es un elemento artificial destinado a restaurar la anatomía de una o varias piezas dentarias, restaurando también la relación entre los maxilares, a la vez que devuelve la dimensión vertical, y repone los dientes.
				El encargado de fabricar estos aparatos o elementos artificiales, es el protésico dental, quien realiza su trabajo en un laboratorio dental recibiendo las indicaciones del odontólogo, que trabaja en clínica.<h4>
                <h2>Tipos de Protesis Dentales</h2>
                <h4>Existen diferentes tipos de protesis, Como su dentista conoce bien sus necesidades, le informará de cuál es la más adecuada, no obstante aquí encontrará una breve descripción.
                <br>
                <br>
                <ul>
                	<li>Prótesis dentales completas, superiores e inferiores:  <br>  <br>
                		<p>Cuando hay que sustituir todos los dientes naturales, se utiliza un juego completo de prótesis dentales. Las prótesis dentales superiores reemplazan la fila superior de dientes y las prótesis dentales inferiores reemplazan la fila inferior de dientes.</p>
                	</li>
                	<div class="container">
                		<div class="row">
                			<div class="col-lg-6 col-sm-6">
                				<center><img class="img-responsive" src="./webroot/img/protesis/1.jpg" class="img-thumbnail"></center>
                			</div>
                			<div class="col-lg-6 col-sm-6">
                				<center><img class="img-responsive" src="./webroot/img/protesis/2.jpg" class="img-thumbnail"></center>
                			</div>
                			
                		</div>
                	</div>
                	<li>Prótesis parciales:  <br> <br>
                	<p>Las prótesis parciales se utilizan sólo cuando hay que reemplazar uno o más dientes naturales. También ayudan a mantener la alineación de los dientes naturales restantes e impiden su desplazamiento.</p>
                	</li>
                	<div class="container">
                		<div class="row">
                			<div class="col-lg-6 col-sm-6">
                				<center><img class="img-responsive" src="./webroot/img/protesis/3.jpg" class="img-thumbnail"></center>
                			</div>
                			<div class="col-lg-6 col-sm-6">
                				<center><img class="img-responsive" src="./webroot/img/protesis/4.jpg" class="img-thumbnail"></center>
                			</div>
                			
                		</div>
                	</div>
                </ul>
               
                <h2>Video Explicativo de la Protesis fija</h2>
        			<div class="embed-responsive embed-responsive-4by3">
  						<video controls="controls" class="embed-responsive-item" src="./webroot/videosgale/protesis.mp4"></video>
					</div>
            </div>
        </div>


  			</div>
		</div>
	

</section>

<section id="implantologia">
	<div class="jumbotron">
  		<div class="container" id="contenidoinicio">
    		<center><h1>Implantologia Dental</h1></center>
    	<div class="container">
            <div class="row">
                <h2>Que es Implantologia Dental?</h2>
                <h4>Es la disciplina de la odontología que se ocupa del estudio de los materiales aloplásticos dentro o sobre los huesos de maxilares para dar apoyo a una rehabilitación dental. Tiene como objetivo sustituir dientes perdidos mediante la colocación quirúrgica de un implante dental en el hueso maxilar o mandibular.<br><br>

                Los implantes dentales pueden ser de diferentes tamaños, superficies y materiales. Sobre los implantes se diseñan las rehabilitaciones protésicas que van a permitir restituir las funciones masticatórias, fonéticas y estéticas del paciente. La elección del tipo de implante que se pone en los pacientes se realiza en función del diagnóstico, pronóstico y del plan de tratamiento interdisciplinario entre el odontólogo general con un especialista en cirugía, periodoncia o prostodoncia.<h4>

                <h2>Tipos de Implantes Dentales</h2>
                <br>
                <h4>
                <ul>
                	<li>Implante dental de carga inmediata (1 fase):  <br>  <br>
                		<p>El implante dental en una fase se utiliza para evitar la segunda fase del implante: es decir, para no abrir la encía y insertar el pilar. En la misma fase se coloca el implante y se fija la corona dental. Este tipo de implante dental requiere una buena calidad y cantidad de hueso. El implante dental en carga inmediata se inserta inmediatamente en el alvéolo. Para esto, no debe ser ninguna infección, pero esto no sucede muy frecuente.</p> <br>
                	</li>
                	<div class="container">
                		<div class="row">
                			<div class="col-lg-12 col-sm-12">
                				<center><img class="img-responsive" src="./webroot/img/implantes/1.jpg" class="img-thumbnail"></center>
                			</div>
                			
                		</div>
                	</div> <br>
                	<li>Implante dental en 2 fases <br> <br>
                	<p>La intervención con estos tipos de implantes dentales supone 2 fases. En la primera etapa se introduce el implante que se debe integrar con el hueso. Por esto, para continuar con la segunda fase de tratamiento debe pasar 3-4 meses después de la cirugía para la mandíbula inferior y 5-6 meses para el maxilar superior.
					En la segunda fase de el tratamiento, sobre la parte superior del implante se atornilla el muñón (el pilar) y después sobre él se cementa la corona permanente.</p>
                	</li>
                	<div class="container">
                		<div class="row">
                			
                			<div class="col-lg-12 col-sm-12">
                				<center><img class="img-responsive" src="./webroot/img/implantes/2.jpg" class="img-thumbnail"></center>
                			</div>
                			
                		</div>
                	</div>
                </ul> </h4>

               <h2>Las ventajas de los implantes dentales:</h2>
                <br>
                <h4>
                <ul>
                	<li>Los implantes dentales prevenga la resorción ósea <br>  <br>
                		<p>es decir, la corona y la raíz, el hueso se retira hacia atrás y cambia la apariencia física. Los implantes dentales evita que este proceso tenga lugar.</p> <br>
                	</li>
                	
                	<li>Los implantes dentales salva los dientes adyacentes<br> <br>
                	<p>En los casos en que falta solo un  diente, existen dos soluciones: hacer un puente con tres coronas o insertar un implante. En el caso con el puente los dientes adyacentes tienen que hacer desvitalizados, en cambio, cuando se inserta un implante dental estos dientes no se tocan.</p>
                	</li>
                	<li>Los implantes dentales no se muevan<br> <br>
                	<p>La  diferencia de  las soluciones removibles es que los implantes dentales le darán la confianza y la sensación de tener los dientes naturales, que no se mueven.</p>
                	</li>
                	<li>Con los implantes dentales no se siente dolor<br> <br>
                	<p> No vas a sentir más dolor e inflamación en las encías debido a la dentadura removible.</p>
                	</li>
                	<li>Los implantes dentales son para siempre<br> <br>
                	<p>Los implantes dentales son para un período largo de la vida, si usted toma el cuidado de ellos.</p>
                	</li>
                	</ul> </h4>
                <h2>Video Explicativo Los Implantes Dentales</h2>
        			<div class="embed-responsive embed-responsive-4by3">
  						<video controls="controls" class="embed-responsive-item" src="./webroot/videosgale/Implantes.mp4"></video>
					</div>
            </div>
        </div>


  			</div>
		</div>
	

</section>

<section id="estetica">
	<div class="jumbotron">
  		<div class="container" id="contenidoinicio">
    		<center><h1>Estetica Dental</h1></center>
    	<div class="container">
            <div class="row">
                <h2>Que es Estetica Dental?</h2>
                <h4>es una especialidad de la odontología que se ocupa de los problemas de salud dental relacionados con la armonía estética de la boca, lo que se traduce básicamente en lograr una sonrisa perfecta, afeada por diferentes tipos de problemas: <br><br>
                <ul>
                	<li>Asimetría dental.</li><br>
                	<li>Separación entre los dientes anteriores.</li><br>
                	<li>Caries en la parte más cercana a la encía.</li><br>
                	<li>Fracturas de los dientes.</li><br>
                </ul>
                 

               </h4>

               <h4> En este sentido, los tratamientos que ofrece la odontología son muy diversos: <br><br>
                <ul>
                	<li>Blanqueamiento dental.</li><br>
                	<div class="container">
                		<div class="row">
                			<div class="col-lg-6 col-sm-6">
                				<center><img class="img-responsive" src="./webroot/img/estetica/1.jpg" class="img-thumbnail"></center>
                			</div>
                			<div class="col-lg-6 col-sm-6">
                				<center><img class="img-responsive" src="./webroot/img/estetica/2.jpg" class="img-thumbnail"></center>
                			</div>
                			
                		</div> <br><br>

                	<li>Carillas estéticas de porcelana.</li><br>
                	<div class="container">
                		<div class="row">
                			<div class="col-lg-6 col-sm-6">
                				<center><img class="img-responsive" src="./webroot/img/estetica/3.jpg" class="img-thumbnail"></center>
                			</div>
                			<div class="col-lg-6 col-sm-6">
                				<center><img class="img-responsive" src="./webroot/img/estetica/4.jpg" class="img-thumbnail"></center>
                			</div> 
                			
                		</div>
                	
                	
                	
                
           
       				 </div> <br><br>
       				 <li>Tratamientos restauradores, de higiene y profilaxis, periodontales y de ortodoncia.</li><br>
       				 </div>
       				 </ul>
       				 </h4>
       			</div>
       		</div>
       	</div>
     </div>



</section>

<section id="blanqueamiento">
	<div class="jumbotron">
  		<div class="container" id="contenidoinicio">
    		<center><h1>Blanqueamiento Dental</h1></center>
    	<div class="container">
            <div class="row">
                <h2>Que es la Ortodoncia?</h2>
                <h4>La ortodoncia es una especialidad de la Odontología que se encarga de todo estudio, prevención, diagnóstico y tratamiento de las anomalías de forma, posición, relación y función de las estructuras dentomaxilofaciales; siendo su ejercicio el arte de prevenir, diagnosticar y corregir sus posibles alteraciones y mantenerlas dentro de un estado óptimo de salud y armonía, mediante el uso y control de diferentes tipos de fuerzas.</h4>
                <br>
                <h2>Tratamiento de ortodoncia</h2>
                <h4>El tratamiento de ortodoncia se puede realizar de dos maneras según el tipo de fuerzas que se apliquen, principalmente están:
              	<ul><li>La técnica fija mediante aparatología fija que está compuesta de elementos adheridos a los dientes (bandas y brackets) a los que se ancla firmemente unos finos arcos elásticos de aleación metálica (níquel-titanio) mediante un conjunto de ligaduras. Como se muestra en la siguiente imagen.</li></ul>

              		<center><img src="./webroot/img/ortodoncia/1.jpg" class="img-thumbnail"><p>Ortodoncia mediante Bandas y Brackets</p></center>
  				
                <ul><li>Los removibles, que permiten ser retirados de la boca por parte del paciente. Ello le permite quitárselos durante la higiene oral y en las comidas. Estos aparatos cuando tratan problemas dentales tienen sus indicaciones específicas que no suplen a la Ortodoncia fija, si bien solucionan algunas maloclusiones sencillas con un coste económico inferior y menos molestias para los pacientes. En cambio suelen ser ampliamente empleados en ortopedia de los maxilares con resultados muy diversos, pero siempre con mayor ámbito que la ortodoncia multibrackets. Se utilizan sobre todo como tratamiento en dentición temporal (temprana o infantil), donde determinados estados patológicos diagnosticados a tiempo pueden llegar a corregirse, hasta tal grado que el tratamiento en la dentición permanente sea muy específico o incluso innecesario.</li></ul>
                	<div class="container">
                		<div class="row">
                			<div class="col-lg-6 col-sm-6">
                				<center><img src="./webroot/img/ortodoncia/2.jpg" class="img-thumbnail"></center>
                			</div>
                			<div class="col-lg-6 col-sm-6">
                				<center><img src="./webroot/img/ortodoncia/3.jpg" class="img-thumbnail"></center>
                			</div>
                			
                		</div>
                	</div>

                </h4>
                <h2>Video Explicativo del Tratamiento de La Ortodoncia</h2>
        			<div class="embed-responsive embed-responsive-4by3">
  						<video controls="controls" class="embed-responsive-item" src="./webroot/videosgale/Ortodoncia.mp4"></video>
					</div>
            </div>
        </div>


  			</div>
		</div>
	

</section>





<?= $this->Html->script(['jquery','bootstrap.min'])?>
