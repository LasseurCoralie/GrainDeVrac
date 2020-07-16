import React from 'react';
import { NavLink } from 'react-router-dom';

// == Import style
import FooterStyled from './FooterStyled';

const Footer = () => (
  <FooterStyled>
    <div>
      <div>
        <ul>
          <li><NavLink exact to="/qui-sommes-nous">Qui sommes-nous ?</NavLink></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">CGV - Mentions légales</a></li>
        </ul>
      </div>

      <div className="img-zn">
        <img src={process.env.PUBLIC_URL + "/img/grainDeVrac-logo-blanche-png.png"} alt="logo grain de vrac blanc"/>
      </div>
      
      <div>
        <ul>
          <li><a href="#"><img src="" alt=""/>Facebook</a></li>
          <li><a href="#"><img src="" alt=""/>Instagram</a></li>
          <li><a href="#"><img src="" alt=""/>Twitter</a></li>
        </ul>
      </div>
    </div>
    <p>&copy; Copyright 2020 - Grain de Vrac - Tous droits réservés <br />Conception et réalisation : <a href="#">Mathieu Chamoulaud</a> & <a href="#">Coralie Lasseur</a></p>
  </FooterStyled>
);

export default Footer;