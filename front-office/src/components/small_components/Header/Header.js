import React, { useState, useEffect, useRef } from 'react';
import { NavLink } from 'react-router-dom';

// == Import Style
import HeaderStyled from './HeaderStyled';

const Header = ({ menuBurger }) => {

  let animation = "";
  
  if (menuBurger) {
    animation = "ouverture";    
  }else {
    animation = "fermeture";
  }

  console.log(window.innerWidth);

  return (
  <HeaderStyled>
    <NavLink exact to="/">
      <div className="logo">
        <img src={process.env.PUBLIC_URL + '/img/grainDeVrac-logo-blanche-png.png'} alt=""/>
      </div>
    </NavLink>
      <div className="menu burgerMenu" >
        <button className={`buttonMenu burgerMenu ${animation}`} type="button">
          <span className="squares-menu burgerMenu">
            <div className="square burgerMenu"></div>
            <div className="square burgerMenu"></div>
            <div className="square burgerMenu"></div>
            <div className="square burgerMenu"></div>
          </span>
        </button>
        { menuBurger &&
          <nav className="navMenu">
            <ul>
              <li><NavLink exact to="/">accueil</NavLink></li>
              <li><NavLink exact to="/catalogue">catalogue des produits</NavLink></li>
              <li><NavLink exact to="/planning">planning</NavLink></li>
              <li><NavLink exact to="/qui-sommes-nous">qui sommes-nous ?</NavLink></li>
              {/* <li><a href="#">recettes</a></li>
              <li><a href="#">ma liste de courses</a></li>
              <li><a href="#">connexion</a></li> */}
            </ul>
          </nav>
        }
    </div>
  </HeaderStyled>
  )
};

export default Header;