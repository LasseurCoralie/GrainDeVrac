import React from 'react';
import { NavLink } from 'react-router-dom';

// == Compononents
import Button from '../../small_components/Button/Button';
import Planning from '../../small_components/Planning/Planning';

// == Styled
import HomePageStyled from './HomePageStyled';

const HomePage = () => {
  return (
    <HomePageStyled>
      <section id="intro-zn">
        {/* <div className="img"></div> */}
        {/* <img src={process.env.PUBLIC_URL + '/img/grain-de-vrac-broderie-hp.jpg'} alt="broderie du logo Grain de Vrac"/> */}
        <div className="intro-zn--text-zn">
          <h1>Grain de Vrac</h1>
          <p>est une épicerie itinérante de vrac située dans les Landes. Retrouvez-nous sur un marché près de chez vous ou en livraison à votre porte !</p>
          <NavLink className="navlink-button" exact to="/qui-sommes-nous">
            <Button content="En savoir plus" />
          </NavLink>
        </div>
          {/* <button className="intro-zn--text-zn--button">En savoir plus !</button>         */}
      </section>

      <section id="special-alert-zn">
        <p>Covid-19 : La préparation de vos commandes est faite dans le stricte respect des consignes sanitaires</p>
      </section>

      <section id="planning-zn">
        <h2 className="title">Planning des marchés et des livraisons de la semaine</h2>
        <Planning />
        <Button content="Voir les semaines suivantes" link="/planning" />
      </section>

      <section id="highlighted-products-zn">
        <h2 className="title">Les produits du mois</h2>
        <div className="product-zn">
          <img src={process.env.PUBLIC_URL + '/img/lentilles-corail.jpg'} alt="lentilles corail"/>
          <div className="txt-zn">
            <h3 className="product-title">Lentilles corail</h3>
            <p className="product-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, voluptates dignissimos! Eum necessitatibus sapiente minima eos error doloremque quod voluptatum!</p>
            <p className="bio">Bio</p>
            <p className="origin">Origine : Bidule-Chouette-les-Pins (44)</p>
            <p className="price">4,50 €/kg</p>
          </div>
        </div>
        <NavLink className="navlink-button" exact to="/catalogue/product">
          <Button content="Consulter ce produit" />
        </NavLink>
      </section>

      <section id="contact-zn">
        <h2 className="title">Une question ? <br />Un commentaire ? <br />Une suggestion ?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem blanditiis fugit assumenda alias? Iusto ex deleniti optio id accusantium perspiciatis, numquam aut quia. Voluptatem saepe ducimus, exercitationem repellendus dignissimos iusto beatae mollitia provident reprehenderit laborum culpa rem officiis minima. Asperiores!</p>
        <NavLink className="navlink-button" exact to="/contact">
          <Button content="Contactez-nous" link="/contact" />
        </NavLink>
      </section>

    </HomePageStyled>
  );
};

export default HomePage;