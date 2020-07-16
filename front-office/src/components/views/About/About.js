import React from 'react';

// == Components
import Button from '../../small_components/Button/Button';

// == Style
import AboutStyled from './AboutStyled';

const About = () => {
  return (
    <AboutStyled>
      <div className="first-paragraph">
        <img src={process.env.PUBLIC_URL + '/img/market-place.jpg'} alt="marché avec caisses de fruits et légumes"/>
        <h2 className="title">Qui sommes-nous ?</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae sapiente vero odit tempora molestias, ut accusantium molestiae nam cupiditate pariatur obcaecati blanditiis placeat hic ex! Earum, necessitatibus! Nemo doloribus illum autem. Eos, eveniet pariatur eaque dolor quis aspernatur iste sed error doloremque perspiciatis assumenda laboriosam a quam. Cupiditate assumenda numquam quis eos eaque ullam beatae, recusandae molestias nulla voluptatem. Necessitatibus natus dolore nemo itaque perferendis officia, perspiciatis error, quos repellendus nisi exercitationem, sequi labore sit enim tenetur quaerat nobis. Obcaecati adipisci dicta minus error facere ullam quaerat nihil earum vel possimus voluptatem iure cupiditate asperiores, consequatur explicabo sequi unde illo recusandae tenetur commodi dignissimos placeat. Inventore commodi dolor qui, accusantium quasi iste ad distinctio sequi debitis possimus, voluptatum odio? Repellat sint blanditiis, repellendus, quibusdam explicabo error quia assumenda ipsum obcaecati in temporibus consequuntur culpa. Laudantium assumenda inventore, doloremque corporis distinctio facere, cupiditate repellendus repellat laboriosam qui corrupti facilis quia aperiam.</p>
      </div>
      <div className="second-paragraph">
        <img src={process.env.PUBLIC_URL + '/img/lentilles-corail.jpg'} alt="lentilles corail en vrac dans un sac en toile"/>
        <h2 className="title">Le concept</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta et, doloribus praesentium ad repudiandae cupiditate quos enim voluptatibus qui laudantium earum eveniet. Unde laborum ipsam eius, ab perferendis modi necessitatibus blanditiis praesentium adipisci ullam laboriosam autem quae dicta, hic alias fugiat recusandae repellat ut officiis neque iusto possimus at error ea? Hic fuga reprehenderit doloribus incidunt maiores necessitatibus molestias libero! Totam autem incidunt culpa eligendi soluta numquam quia earum asperiores ab, velit neque a sit aspernatur fugiat ex quis recusandae nemo aliquid. Delectus rem quidem reprehenderit officiis alias, dolores tempora, molestiae facere, molestias natus qui nisi hic dolore consequatur eveniet quis velit! Omnis, maxime beatae soluta tempora nisi velit repellat ullam doloremque voluptatum officia dolorum nihil fuga. Eaque asperiores laudantium ducimus eligendi culpa consectetur eius ea! Modi temporibus aliquam nisi molestiae optio, fuga eaque a quidem dolorem obcaecati, veritatis excepturi incidunt dolores perspiciatis eligendi vel quas corrupti adipisci pariatur natus quod? Dignissimos odit facere minus perspiciatis quaerat labore assumenda voluptate id iste aliquam sint minima, exercitationem consequuntur accusantium quas maxime enim ab ratione non doloribus. At eos, aperiam iste nisi nostrum autem facilis labore dolor ratione quasi illum placeat odio repudiandae suscipit nulla temporibus accusamus explicabo architecto obcaecati earum voluptates.</p>
      </div>
      <div className="more-about">
      <h2 className="title">En savoir plus ?</h2>
        <Button content="Nous contacter" />
      </div>
    </AboutStyled>
  );
};

export default About;