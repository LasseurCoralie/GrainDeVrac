import React from 'react';

// == Import Small Compononents
import Button from '../../small_components/Button/Button';
import Footer from '../../small_components/Footer/Footer';

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
        <Button content="En savoir plus"/>
          {/* <button className="intro-zn--text-zn--button">En savoir plus !</button>         */}
      </section>

      <section id="special-alert-zn">
        <p>Covid-19 : La préparation de vos commandes est faite dans le stricte respect des consignes sanitaires</p>
      </section>

      <section id="planning-zn">
        <h2 className="title">Planning des marchés et des livraisons de la semaine</h2>
        <table>
          <tr className="tr-top">
            <td className="cell-left">&nbsp;</td>
            <th>Matin</th>
            <th className="cell-right">Après-midi</th>
          </tr>
          <tr>
            <th>Lundi</th>
            <td><strong className="market-place">Poribersped</strong> <br/> rue des trucs <br/> 6h à 12h</td>
            <td className="delivery">Livraison</td>
          </tr>
          <tr>
            <th>Mardi</th>
            <td><strong className="market-place">Poribersped</strong> <br/> rue des trucs <br/> 5h à 10h</td>
            <td className="today"><strong className="market-place">Poribersped</strong> <br/> rue des trucs <br/> 13h à 17h</td>
          </tr>
          <tr>
            <th>Mercredi</th>
            <td><strong className="market-place">Poribersped</strong> <br/> rue des trucs <br/> 6h à 12h</td>
            <td><strong className="market-place">Poribersped</strong> <br/> rue des trucs <br/> 13h à 17h</td>
          </tr>
          <tr>
            <th>Jeudi</th>
            <td className="delivery">Livraison</td>
            <td><strong className="market-place">Poribersped</strong> <br/> rue des trucs <br/> 15h à 19h30</td>
          </tr>
          <tr>
            <th>Vendredi</th>
            <td><strong className="market-place">Poribersped</strong> <br/> rue des trucs <br/> 10h à 13h</td>
            <td><strong className="market-place">Poribersped</strong> <br/> rue des trucs <br/> 13h30 à 16h</td>
          </tr>
          <tr>
            <th>Samedi</th>
            <td className="delivery">Livraison</td>
            <td><strong className="market-place">Poribersped</strong> <br/> rue des trucs <br/> 12h à 17h</td>
          </tr>
          <tr className="tr-down">
            <th className="cell-left">Dimanche</th>
            <td className="delivery">Livraison</td>
            <td className="cell-right"><strong className="market-place">Poribersped</strong> <br/> rue des trucs <br/> 14h à 19h</td>
          </tr>
        </table>
        <Button content="Voir les semaines suivantes"/>
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
        <Button content="Consulter ce produit" />
      </section>

      <section id="contact-zn">
        <h2 className="title">Une question ? <br />Un commentaire ? <br />Une suggestion ?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem blanditiis fugit assumenda alias? Iusto ex deleniti optio id accusantium perspiciatis, numquam aut quia. Voluptatem saepe ducimus, exercitationem repellendus dignissimos iusto beatae mollitia provident reprehenderit laborum culpa rem officiis minima. Asperiores!</p>
        <Button content="Contactez-nous" />
      </section>

      <Footer />
    </HomePageStyled>
  );
};

export default HomePage;