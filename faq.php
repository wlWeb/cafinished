<?php include('includes/initialize.php'); 
$title = "Frequently Asked Questions";
$page = "faq";

?>

<?php 

if(is_post_request()) {
  $message = [];
  $message['name'] = $_POST['name'] ?? '';
  $message['email'] = $_POST['email'] ?? '';
  $message['subject'] = $_POST['subject'] ?? '';
  $message['message'] = $_POST['message'] ?? '';

  $result = insert_message($message);
  if($result) {
    redirect_to('thankyou.php');
  }
} 

?>

<?php include('includes/head.php'); ?>

<body>

  <?php include('includes/preload.php'); ?>

  <div class="sb-site-container">

    <?php include('includes/tophead.php'); ?>
    <?php include('includes/nav.php'); ?>

      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-7">
            <div class="card">
              <div class="ms-hero-bg-primary ms-hero-img-networkf">
                <h3 class="color-white index-1 text-center pb-4 pt-4 no-mb">Frequently Asked Questions</h3>
              </div>
              <div class="panel-group ms-collapse no-margin" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-primary">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number One </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias delectus laboriosam, ut placeat autem itaque, possimus illum dicta enim quia. Quam similique voluptate illo debitis corrupti sunt, vitae dicta officia impedit hic. Perferendis,
                        odit consequuntur. Numquam doloremque aperiam ut, adipisci molestiae, delectus deleniti accusamus expedita sit suscipit nostrum voluptatem perspiciatis deserunt optio hic nihil distinctio nesciunt. Dolor assumenda repudiandae,
                        tempora magni quidem maiores minima adipisci architecto porro accusamus alias fugit, doloremque fugiat veniam est totam.</p>
                      <p>Quos cum sunt temporibus ipsam, voluptatibus cupiditate magnam quam officiis laborum facere ipsa molestiae ratione fugiat iusto perspiciatis dolorem veniam maxime tempore perferendis illum aliquam! Aspernatur quasi possimus rem tempora,
                        facere sed voluptatibus sequi saepe consectetur necessitatibus a cumque fugiat earum error, maxime fugit voluptatum quae minima tenetur reiciendis dolor temporibus labore odit. Quos, ex architecto labore quasi nostrum tempora ipsam
                        id numquam voluptatum, eos, tempore. Delectus, esse! Dolorum ipsam eos nesciunt soluta, voluptatum beatae?</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-primary">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Two </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nemo quas veniam fugit quidem, sequi aliquid ad, reiciendis eaque officiis consectetur adipisci similique eum ut dolores illum itaque accusamus quia consequuntur,
                        labore eos maiores! Ea debitis provident cupiditate optio maiores obcaecati rerum, quisquam, ut dolorem quo nemo doloremque architecto esse deleniti voluptates repellendus non neque fuga. Ut commodi nostrum delectus necessitatibus
                        totam, rerum mollitia quas qui facere nihil tempora pariatur illum maiores, quos quasi vero.</p>
                      <p>Ex repellendus voluptate sunt quia, error. Libero reiciendis vel nulla inventore iusto, praesentium animi dolorum assumenda doloremque quisquam molestias officiis sequi repellat beatae, odit et fugiat quod, amet incidunt cum placeat
                        voluptates sapiente nemo minima reprehenderit! Ex itaque eligendi quasi qui, repellendus facere quia? Autem culpa, quis officia, assumenda totam odit harum velit beatae, quas facilis numquam. Vel est, totam maiores ea libero accusantium
                        excepturi minima voluptatibus. Similique reiciendis architecto veritatis labore quas fuga nulla.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-primary">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Three </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum dolore voluptates corporis. Sint ullam quidem, alias. Mollitia vero quidem quis numquam id sed magnam temporibus hic atque ad similique possimus aspernatur fuga delectus
                        est, dolorum sunt sapiente blanditiis sequi esse ut nihil repellendus. Quisquam repudiandae ratione quam assumenda, voluptatibus impedit illo eligendi illum architecto soluta tenetur debitis similique ex nam mollitia, dolores vel
                        accusantium. Illum odio eius beatae, enim tenetur dolore voluptatem quos quas. Molestiae!</p>
                      <p>Ducimus corporis iste voluptatum. Aliquam quam nisi, est ratione accusantium officia enim, sed nostrum in velit ullam minima temporibus nam earum ipsam molestias ipsa optio architecto! Repellendus, veniam, nobis? Sequi, dignissimos
                        expedita est, accusantium sapiente eveniet repellendus quo animi libero facilis consequuntur, vitae nesciunt explicabo molestias. Nihil architecto magni assumenda quidem quae similique hic, cumque exercitationem voluptatem obcaecati
                        porro! Minima nisi nam ex optio repellendus animi dolores, enim debitis, inventore voluptas commodi nemo praesentium sunt.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-primary">
                  <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Four </a>
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias exercitationem qui blanditiis harum itaque perferendis autem, consequatur fugiat deserunt impedit maiores magni, voluptatum, atque, recusandae facere tempore minima
                        facilis! Commodi id dignissimos vel, deleniti officia, eligendi porro asperiores, enim rerum, quibusdam tempora perspiciatis alias voluptatum. Voluptatum facilis, quod aperiam fugiat odio exercitationem labore cupiditate enim quos
                        possimus quasi, inventore adipisci voluptatibus non amet soluta explicabo iste, assumenda vel impedit. Quo eius sit, voluptas consequuntur pariatur.</p>
                      <p>Sed nihil assumenda ad quisquam recusandae aspernatur, veniam amet. Porro quidem rem sed, nulla. Labore accusantium illum non quia consequatur, saepe fuga deleniti cumque ipsum odit temporibus, facere aperiam reiciendis fugit laudantium
                        odio quo maiores maxime debitis! Nihil perspiciatis animi aspernatur, provident ab quis veniam vero ad quisquam reiciendis fugit porro molestiae illum amet commodi quam ipsam, deleniti obcaecati voluptatem in rerum nostrum neque!
                        Eum quisquam iusto suscipit, asperiores laudantium accusamus optio hic rem odit.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-primary">
                  <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Five </a>
                    </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatem placeat nihil. Rerum magnam velit modi, eum eius deleniti fuga ducimus nisi cum assumenda inventore, neque itaque fugiat tempore suscipit magni nobis. Hic
                        consequuntur odit eligendi possimus optio saepe eveniet! Corporis cumque aut quaerat consectetur sunt iure molestiae, repellendus dolore velit odio blanditiis numquam assumenda eius quod ipsam ipsum quibusdam excepturi maxime non,
                        eligendi repudiandae sit repellat, vel? Culpa reprehenderit itaque eaque. Fugiat, ducimus, quos?</p>
                      <p>Inventore enim at ab, animi, iure consequuntur saepe hic excepturi distinctio eos. Cum atque illum repudiandae laborum rerum. Aperiam aut odio cum molestias doloremque quae, ab deserunt. Facilis dolor libero aspernatur nulla incidunt,
                        quam adipisci qui, voluptatum soluta, sunt porro, molestiae quidem vero quisquam. Quia tempora temporibus quasi nesciunt dolor quo soluta expedita nisi repudiandae culpa! Quia error consectetur laborum debitis, voluptatum, corporis
                        nobis, suscipit explicabo repellat quos non fugit? Aliquam, praesentium tempora rerum? Iure.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-primary">
                  <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Six </a>
                    </h4>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab voluptatem, deserunt corporis in cum quas nostrum molestiae amet, laudantium assumenda rem libero minus pariatur est obcaecati sapiente neque laborum excepturi possimus
                        quidem fugiat, explicabo optio. Ratione cum quos, quam facere similique fugit earum nemo harum eos a. Asperiores aspernatur porro optio, velit reprehenderit soluta nam possimus. Voluptatum, quae. Sequi adipisci nulla rem quisquam,
                        atque deleniti veritatis laboriosam, quaerat, natus nesciunt laudantium, voluptatem impedit earum ex.</p>
                      <p>Cumque aut suscipit obcaecati, voluptatibus libero! Quidem totam minus veritatis rerum, maiores repudiandae, voluptatem corporis incidunt atque at. Assumenda, vero, dolor. Natus perspiciatis ratione, ea pariatur, voluptate optio
                        quaerat odio nostrum, laboriosam, nobis ab eligendi eos assumenda nisi. Non commodi quam consequuntur voluptas cumque neque accusantium temporibus, perspiciatis magnam quia enim at optio ratione sunt illo praesentium natus labore.
                        Necessitatibus nemo nulla quae magni ut. Ratione placeat debitis, quas soluta, possimus officiis vel laudantium iste.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact -->
          <div class="col-lg-4 col-md-5">
            <div class="card">
              <div class="ms-hero-bg-primary ms-hero-img-networkf">
                <h3 class="color-white index-1 text-center pb-4 pt-4 no-mb">Contact Us</h3>
              </div>
              <div class="card-block">
                <h3 class="color-primary">You have more questions?</h3>
                <form class="" action="faq.php" method="post">
                  <div class="form-group label-floating">
                    <label for="inputName" class="control-label">Name</label>
                    <input id="inputName" class="form-control" type="text" name="name" value="" />
                  <div class="form-group label-floating">
                    <label for="inputEmail" class="control-label">Email</label>
                    <input id="inputEmail" class="form-control" type="email" name="email" value="" />
                  <div class="form-group label-floating">
                    <label for="inputSubject" class="control-label">Subject</label>
                    <input id="inputSubject" class="form-control" type="text" name="subject" value="" />
                  <div class="form-group label-floating">
                    <label for="textArea" class="control-label">Message</label>
                    <textarea rows="5" class="form-control" type="text" name="message" value=""></textarea>
                  </div>
                  <div class="form-group text-right">
                      <div class="col-md-6 col-md-offset-5">
                        <div id="operations">
                          <input type="submit" class="btn btn-raised btn-primary" value="Submit Message" />
                        </div>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      <!-- container -->
          <?php include('includes/footer.php'); ?>