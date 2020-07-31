import React, { useState, useEffect, useRef } from 'react';
import { NavLink } from 'react-router-dom';

// == Import Style
import HeaderStyled from './HeaderStyled';

const Header = ({ menuBurger, setMenuBurger }) => {

  let animation = "";
  
  if (menuBurger) {
    animation = "ouverture";    
  }else {
    animation = "fermeture";
  }
  
  const handleClickMenu = () => {

    const menuList = document.querySelector('nav.navMenu');
    const button = document.querySelector('button.buttonMenu');
    const spanButton = document.querySelector('span.squares-menu');
    const logoImg = document.querySelector('div.logo');

    const closeBurgerMenu = () => {
      const menuList = document.querySelector('nav.navMenu');
      const button = document.querySelector('button.buttonMenu');
      const spanButton = document.querySelector('span.squares-menu');
      const logoImg = document.querySelector('div.logo');
  
      menuList.classList = 'navMenu closedMenu';
      button.style.border = '1px solid rgb(22, 14, 45)';
      spanButton.style.transform = 'rotate(0deg)';
      logoImg.style.border = '1px solid rgb(22, 14, 45)';  
      setMenuBurger(false);
    };
    
    if(!menuBurger) {
      menuList.classList = 'navMenu openMenu';
      button.style.border = '1px solid rgb(238, 123, 0)';
      spanButton.style.transform = 'rotate(45deg)';
      logoImg.style.border = '1px solid rgb(238, 123, 0)';
      setMenuBurger(true);
    }

  };

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