<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Selectors</title>

  <style>
    .parent {
      position:relative;
      top: 50px;
      left: 50px;
      width: auto;
      height: 500px;
      margin: 0;
      line-height: 0;
      border: 3px solid #73AD21;
    }

    .child{
      position: absolute;
      top:50px;
      left: 600px;
      border: 5px solid red;
      height: 100px;
      width: 100px;
    }
  </style>
</head>

<body>
   <?php include '../header.php'; ?>

  <div class="parent">
    <p>parent cotent</p>
    <div class="child">
      child content;
    </div>
  </div>


  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente aut optio obcaecati expedita sit dolore eius
    quasi, eligendi quis aperiam enim voluptas labore dolor minus maiores tenetur exercitationem perferendis
    perspiciatis cumque molestiae reprehenderit veritatis beatae voluptates laborum. Accusamus repellat ut aliquid.
    Aliquid quis aperiam id quia accusamus sunt molestiae tempora porro eaque facere rerum asperiores consequuntur neque
    magni maxime, excepturi ipsum qui quod sit. Culpa nesciunt odit modi, error porro repellendus minima nisi doloribus,
    cupiditate unde reiciendis magni. Hic veritatis beatae cumque pariatur nisi autem unde error incidunt saepe
    consequatur dolorem reprehenderit est molestias nam odio, distinctio accusamus recusandae? Numquam perspiciatis ut
    eos quisquam autem, quas exercitationem iure ad eaque, provident quod veniam facere alias qui molestiae maxime esse
    voluptas. Quo perferendis ab id magnam dolores sunt provident unde nulla deserunt nobis cumque eos eveniet, eaque et
    expedita ipsum animi corrupti eum atque dolorem! Incidunt, laborum at ullam saepe quas eius quasi, similique,
    molestiae esse obcaecati veritatis aspernatur tempore eum molestias voluptatem ad fugit temporibus eveniet repellat
    repudiandae ratione minima veniam? Quod rem reprehenderit accusamus illo perspiciatis atque, eaque recusandae iure
    qui, modi, repudiandae in nihil. Quis totam ipsam exercitationem dolorum quae aliquam rerum eligendi magni ab dolore
    quos reprehenderit accusamus fugiat, omnis, at quod blanditiis sed dolorem sunt. Officiis dolorum earum et animi
    neque ut labore in eveniet numquam ab voluptas, facilis velit, assumenda enim provident doloremque beatae laboriosam
    odit non esse aperiam, dicta quae. Obcaecati laboriosam distinctio dolores voluptates vel numquam aliquid debitis
    facilis, quos magni sequi perferendis in recusandae reprehenderit consectetur alias animi necessitatibus omnis
    dolorum dicta aspernatur assumenda explicabo! Iusto vero nostrum fugiat sint voluptas eveniet labore pariatur harum
    repudiandae earum quia hic minus aliquid animi illum, voluptatum quas enim. Quaerat perspiciatis harum veritatis
    nisi quidem consequuntur nesciunt doloribus, eos accusamus aspernatur voluptas qui tempora magni esse laudantium
    similique earum saepe. Libero corporis quos eligendi! Error velit nobis beatae unde dignissimos animi, placeat nemo
    repellendus consequatur eveniet laudantium amet quas veniam maiores perferendis, facilis, magni voluptas. Vel totam
    pariatur dolorum et corrupti error harum, impedit repellat id sunt nesciunt officia cupiditate veritatis, facilis
    labore quia deleniti libero, soluta laboriosam officiis. Nostrum veritatis expedita voluptates molestiae vero soluta
    totam non, aperiam repudiandae iure sint quo nemo harum porro aut. Aspernatur voluptatibus et rerum asperiores
    beatae ratione officia esse excepturi expedita libero? Ipsa ratione rem illum illo, nobis doloremque unde aliquam
    aut deleniti exercitationem autem numquam labore consectetur placeat? Quis veritatis laudantium quasi sint aliquam
    autem hic excepturi. Quo odit ipsam blanditiis delectus architecto distinctio sapiente sit, aut, explicabo
    exercitationem doloribus? Est fuga quis aut animi ducimus veritatis quaerat nesciunt repellendus debitis a porro,
    ut, vel explicabo natus facere recusandae quidem libero provident distinctio. Itaque nam, ratione, totam qui
    molestiae perspiciatis iure distinctio quasi reiciendis sint velit. Qui reiciendis sed laudantium ducimus, quasi
    corporis praesentium! Nemo dolorum deserunt, accusantium perferendis nesciunt, soluta aspernatur alias, earum quae
    sequi quod consequatur ex commodi eum? Hic consequuntur numquam inventore dolorem aperiam, perferendis deleniti
    adipisci necessitatibus quas assumenda tempore nihil est beatae. Vero, sequi molestias reiciendis, voluptatibus
    debitis aperiam nemo quasi quas perferendis aut incidunt in, numquam necessitatibus. Explicabo ex praesentium
    debitis voluptas commodi eveniet quibusdam fugit tempora, maxime tenetur. Expedita beatae nulla, labore ipsum
    tenetur quisquam. Nisi numquam iure fuga! Quaerat sint dicta eveniet enim voluptatum, ducimus magni sapiente, quasi
    tenetur possimus voluptas. Error autem blanditiis, doloribus temporibus magni iste molestiae. Delectus ipsa esse
    alias laboriosam velit sit optio? Quibusdam beatae alias voluptatum quas omnis quisquam maiores repudiandae quo.
    Fuga voluptate voluptatem, magnam ad blanditiis, ab beatae ducimus rem labore dolor eos eum nuvoluptatum nisi iusto architecto perspiciatis distinctio repellendus quidem autem ipsum est suscipit asperiores
    omnis quas recusandae magnam et beatae. Cum sed ad numquam ratione facere distinctio voluptate, reiciendis amet est
    fuga exercitationem totam nihil magnam commodi eum sequi nisi molestiae consequuntur explicabo, quos voluptatibus
    libero eligendi eveniet consequatur. Quod dolore ea non, temporibus officiis fugit consectetur eos qui illo quaerat
    ducimus ipsam? Amet eos temporibus, omnis sint ut sequi, explicabo accusantium quos laborum eaque eveniet quidem
    illo vero non unde nulla culpa voluptates doloremque necessitatibus iure. Neque quae architecto eveniet aperiam
    incidunt eaque a tempora velit beatae sit assumenda molestias unde repudiandae autem nihil enim id nostrum quo
    molestiae aspernatur error, officiis nisi placeat voluptatum. Iste omnis facere sunt perspiciatis id rem hic, dicta,
    odio assumenda error qui, blanditiis minus! Est, possimus architecto. Magnam modi porro odit similique nobis
    expedita officia at nostrum eos id quae culpa voluptatibus quasi, veritatis ullam ducimus. Eveniet repellat facere
    voluptatibus quisquam modi, quidem sunt officiis iusto! At, quidem error obcaecati iusto aspernatur exercitationem
    impedit dicta consequuntur voluptates magni amet alias quam consequatur natus aperiam nobis, illum reiciendis eos
    explicabo inventore ratione. Suscipit expedita praesentium animi sit! Quam earum id molestiae magni sint voluptate
   
    molestias accusamus maiores id tenetur est ipsa deleniti mollitia eum explicabo numquam saepe at, nam, et minima
    nesciunt eligendi labore debitis qui voluptas ex? Pariatur delectus nobis velit minima nostrum aliquid architecto,
    autem ratione. Velit accusamus quidem soluta nihil nam voluptatum quo eius fugit aliquam excepturi earum porro dolor
    possimus, ullam maxime. Veniam rerum molestias sequi expedita omnis quas autem impedit aliquam, error rem.</p>

 <?php include '../footer.php'; ?>
</body>

</html>