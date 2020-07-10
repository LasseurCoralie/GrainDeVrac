import React from 'react';

// == Import Styled
import HomePageStyled from './HomePageStyled';

const HomePage = () => {
  return (
    <HomePageStyled>
      <section id="intro-zn">
        <img src={process.env.PUBLIC_URL + '/img/grain-de-vrac-broderie-hp.jpg'} alt="broderie du logo Grain de Vrac"/>
        <div className="intro-zn--text-zn">
          <h1>Grain de Vrac</h1>
          <p>est une épicerie itinérante de vrac située dans les Landes. Retrouvez-nous sur un marché près de chez vous ou en livraison à votre porte !</p>
        </div>
          <button className="intro-zn--text-zn--button">En savoir plus !</button>
        
      </section>

      <section id="special-alert-zn">
        <p>Covid-19 : La préparation de vos commandes est faite dans le stricte respect des consignes sanitaires</p>
      </section>

      <section id="planning-zn"></section>

      <section id="highlighted-products-zn"></section>

      <section id="contact-zn"></section>
    </HomePageStyled>
  );
};

export default HomePage;