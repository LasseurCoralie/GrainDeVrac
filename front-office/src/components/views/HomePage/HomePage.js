import React, { useState, useEffect } from 'react';
import { NavLink } from 'react-router-dom';
import routeName from '../../../routeName';
import axios from 'axios';

// == Compononents
import Button from '../../small_components/Button/Button';
import Planning from '../../small_components/Planning/Planning';

// == Styled
import HomePageStyled from './HomePageStyled';

const HomePage = () => {

  const dataSlogan = "est une épicerie itinérante de vrac située dans les Landes. Retrouvez-nous sur un marché près de chez vous ou en livraison à votre porte !";

  const [slogan, setSlogan] = useState(dataSlogan);

  useEffect(() => {
    axios({
      method: 'get',
      url: routeName + '/dataPage'
    })
      .then((response) => {
      setSlogan(response);
    })
      .catch((error) => {
        console.log('Une erreur s\'est produite : ', error);
      });
  }, []);

  return (
    <HomePageStyled>
      <section id="intro-zn">
        {/* <div className="img"></div> */}
        {/* <img src={process.env.PUBLIC_URL + '/img/grain-de-vrac-broderie-hp.jpg'} alt="broderie du logo Grain de Vrac"/> */}
        <div className="intro-zn--text-zn">
          <h1>Grain de Vrac</h1>
          <p>{slogan}</p>
          {/* <p>est une épicerie itinérante de vrac située dans les Landes. Retrouvez-nous sur un marché près de chez vous ou en livraison à votre porte !</p> */}
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
            <p className="product-content">Cette légumineuse rose saumon originaire d'Asie est aujourd'hui cultivée sur le pourtour Méditerranéen et se consomme toute l'année </p>
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
        <h2 className="title">Une question ? Un commentaire ? Une suggestion ?</h2>
        <p>Vous avez une questions sur nos produits ou leur originie ? Vous aimeriez savoir si vous pouvez apporter vos propres contenants ou si Grain de Vrac peut vous en vendre.<br />Vous souhaitez nous témoigner votre amour ? Cliquez sur le bouton ci-dessous pour nous envoyer vos demandes ou vos mots doux.</p>
        <NavLink className="navlink-button" exact to="/contact">
          <Button content="Contactez-nous" link="/contact" />
        </NavLink>
      </section>

    </HomePageStyled>
  );
};

export default HomePage;