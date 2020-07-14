import React from 'react';

// == Import Style
import HeaderStyled from './HeaderStyled';

const Header = () => (
  <HeaderStyled>
    <div>
      <img src="" alt=""/>
    </div>
    <div className="menu">
      <button type="button">
        <span className="squares-menu">
          <div className="square"></div>
          <div className="square"></div>
          <div className="square"></div>
          <div className="square"></div>
        </span>
      </button>
      <nav>
        <ul>
          <li><a href="#">accueil</a></li>
          <li><a href="#">catalogue des produits</a></li>
          <li><a href="#">planning</a></li>
          <li><a href="#">qui sommes-nous ?</a></li>
          <li><a href="#">recettes</a></li>
          <li><a href="#">ma liste de courses</a></li>
          <li><a href="#">connexion</a></li>
        </ul>
      </nav>

    </div>
  </HeaderStyled>
);

export default Header;