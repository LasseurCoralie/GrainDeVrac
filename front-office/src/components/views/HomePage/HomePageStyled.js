import styled from 'styled-components';
import theme from '../../../theme/theme';

const HomePageStyled = styled.div`
  section#intro-zn {
    text-align: center;
    background: url(/img/grain-de-vrac-broderie-hp-mobile.jpg);
    background-size: cover;
    background-position: center;
    height: 100vh;
    margin-top: -3em;
    position: relative;

    div.intro-zn--text-zn {
      position: absolute;
      bottom: 0;
      text-align: left;
      padding: 1em;
      border: 1px solid ${theme.colors.black};
      margin: 0 1em 7em;
      background-color: white;
      opacity: .99;

      h1 {
        display : inline-block;
        position: relative;
        margin: 0;
        text-transform: uppercase;
        font-size: 48px;

        :after{
          content: '';
          position: absolute;
          left: 0;
          bottom: 14px;
          width: 100%;
          height: 15px;
          background-color: ${theme.colors.orange};
          z-index: -1;
        }
      }
      
      p {
        font-size: 24px;
        line-height: 36px;
        margin: 0;
      }

      a.navlink-button {
        margin: 0;
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        bottom: -7em;
      }
    }
  }

  section#special-alert-zn {
    text-align: center;
    background-color: ${theme.colors.purple};
    border-top: 1px solid ${theme.colors.black};
    border-bottom: 1px solid ${theme.colors.black};

    p {
      color: white;
      font-weight: bold;
      text-transform: uppercase;
      font-size: 16px;
      padding: 1em 3em;
      margin: 0 1em;
    }
  }

  section#planning-zn {
    text-align: center;
    margin: 0 1em 2em;
  }

  section#highlighted-products-zn {
    background-color: ${theme.colors.orange};
    margin: 0;
    padding: 0 1em;
    text-align: center;

    h2 {
      color: white;
      padding-top: 2em;
      margin-bottom: 2em;
      margin-top: 0;

    }

    button {
      background-color: white;
      color: ${theme.colors.orange};
    }

    div.product-zn {
      max-width: 350px;
      margin: 0 auto;

      img {
        border: 1px solid ${theme.colors.black};
        max-width: 100%;
        box-sizing: border-box;
      }

      div.txt-zn {
        margin: -3em -2em 0;
        text-align: left;
        background-color: white;
        padding: 2em;
        padding-top: 3em;
        border: 1px solid ${theme.colors.black};
      
        p {
          margin: 0;
        }

        p.bio {
          margin-top: 1em;
          font-weight: bold;
        }

        p.price {
          margin-top: 1em;
          font-family: ${theme.fonts.special};
          font-weight: bold;
        }
      }
    }
  }

  section#contact-zn {
    text-align: center;
    margin: 0 1em;

    h2 {
      line-height: 1.2em;
      margin: 2em 0;
    }

    p{
      line-height: 1.6em;
    }
  }

  //////////////////////////////////////////
  //////////////// DESKTOP /////////////////
  //////////////////////////////////////////

  @media (min-width: 1100px) {
    section#intro-zn {
      background: url(/img/grain-de-vrac-broderie-hp-desktop.jpg);
      background-size: cover;
      background-position: center;
      height: 80vh;
      display: flex;
      align-items: center;
      justify-content: flex-end;

      div.intro-zn--text-zn {
        width: 40%;
        position: relative;
        margin-right: -.5em;

        a.navlink-button {
          bottom: -8em;
        }
      }
    }

    section#planning-zn {
      position: relative;
      z-index: 2;
      max-width: 1050px;
      margin: 2em auto;
      padding: 0 2em;
      box-shadow: 0px 10px 7px 0px rgba(0,0,0,0.25);
      background-color: white;

      h2.title {
        margin-top: 3em;
        margin-bottom: 2em;
      }

      button {
        margin-bottom: 5em;
      }
    }

    section#highlighted-products-zn {

      margin-top: -10em;

      h2.title {
        padding-top: 7em;
            }

      div.product-zn {
        display: flex;
        justify-content: center;
        max-width: 100%;
        margin-left: -1em;

        img, div.txt-zn {
          max-width: 400px;
          height: 100%;
        }

        img {
          z-index: 500;
        }

        div.txt-zn {
          padding: 1em 2em 1em 3em;
          margin: 2em -2em 0;

          h3.product-title {
            margin-top: 0;
          }
        }
      }
          a.navlink-button {
            margin-top: 4em;
            margin-bottom: 5em;
          }

      button {
        
        :hover {
          background-color: ${theme.colors.purple};
          color: white;
        }
      }
    }

    section#contact-zn {
      a.navlink-button {
        margin-bottom: 4em; 

      }
    }
  }
`;

export default HomePageStyled;